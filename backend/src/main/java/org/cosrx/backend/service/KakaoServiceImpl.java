package org.cosrx.backend.service;


import io.netty.handler.codec.http.HttpHeaderValues;
import lombok.RequiredArgsConstructor;
import lombok.extern.slf4j.Slf4j;
import org.cosrx.backend.dto.KakaoTokenResDTO;
import org.cosrx.backend.dto.KakaoUserInfoResDTO;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.factory.annotation.Value;
import org.springframework.http.HttpHeaders;
import org.springframework.stereotype.Service;
import org.springframework.web.reactive.function.client.WebClient;
import reactor.core.publisher.Mono;
import org.springframework.http.HttpStatusCode;


@Slf4j
@RequiredArgsConstructor
@Service

public class KakaoServiceImpl implements KakaoServiceIf{
    private String clientId;
    private final String KAUTH_TOKEN_URL_HOST="https://kauth.kakao.com";
    private final String KAUTH_USER_URL_HOST="https://kapi.kakao.com";

    @Autowired
    public KakaoServiceImpl(@Value("${kakao.client_id}") String clientId){
        this.clientId = clientId;

    }
    @Override
    public String getAccessTokenKakao(String code) {
        KakaoTokenResDTO kakaoTokenResDTO = WebClient.create(KAUTH_TOKEN_URL_HOST).post()
                .uri(uriBuilder -> uriBuilder
                        .scheme("https")
                        .path("/oauth/token")
                        .queryParam("grant_type", "authorization_code")
                        .queryParam("client_id", clientId)
                        .queryParam("code", code)
                        .build(true))
                .header(HttpHeaders.CONTENT_TYPE, HttpHeaderValues.APPLICATION_X_WWW_FORM_URLENCODED.toString())
                .retrieve()
                //TODO : Custom Exception
//                .onStatus(HttpStatusCode::is4xxClientError, clientResponse -> Mono.error(new RuntimeException("Invalid Parameter")))
//                .onStatus(HttpStatusCode::is5xxServerError, clientResponse -> Mono.error(new RuntimeException("Internal Server Error")))
                .onStatus(status -> status.is4xxClientError(), response -> {
                    log.error("4xx 에러: {}", response.statusCode());
                    return Mono.error(new RuntimeException("잘못된 요청입니다."));
                })
                .onStatus(status -> status.is5xxServerError(), response -> {
                    log.error("5xx 에러: {}", response.statusCode());
                    return Mono.error(new RuntimeException("카카오 서버 에러"));
                })
                .bodyToMono(KakaoTokenResDTO.class)
                .block();


        log.info(" [Kakao Service] Access Token ------> {}", kakaoTokenResDTO.getAccessToken());
        log.info(" [Kakao Service] Refresh Token ------> {}", kakaoTokenResDTO.getRefreshToken());
        //제공 조건: OpenID Connect가 활성화 된 앱의 토큰 발급 요청인 경우 또는 scope에 openid를 포함한 추가 항목 동의 받기 요청을 거친 토큰 발급 요청인 경우
        log.info(" [Kakao Service] Id Token ------> {}", kakaoTokenResDTO.getIdToken());
        log.info(" [Kakao Service] Scope ------> {}", kakaoTokenResDTO.getScope());

        return kakaoTokenResDTO.getAccessToken();
    }

    @Override
    public KakaoUserInfoResDTO getUserInfo(String accessToken) {
        KakaoUserInfoResDTO userInfoDTO = WebClient.create(KAUTH_USER_URL_HOST)
                .get()
                .uri(uriBuilder -> uriBuilder
                        .scheme("https").path("/v2/user/me").build(true))
                .header(HttpHeaders.AUTHORIZATION, "Bearer " + accessToken)
                .header(HttpHeaders.CONTENT_TYPE, HttpHeaderValues.APPLICATION_X_WWW_FORM_URLENCODED.toString())
                .retrieve()
                .onStatus(HttpStatusCode::is4xxClientError, clientResponse -> Mono.error(new RuntimeException("Invalid Parameter")))
                .onStatus(HttpStatusCode::is5xxServerError, clientResponse -> Mono.error(new RuntimeException("Internal Server Error")))
                .bodyToMono(KakaoUserInfoResDTO.class)
                .block();

        log.info(">>> 요청에 사용된 accessToken = {}", accessToken);
        log.info("[ Kakao Service ] Auth ID ---> {} ", userInfoDTO.getId());
//        log.info("[ Kakao Service ] NickName ---> {} ", userInfoDTO.getKakaoAccount().getProfile().getNickName());
        log.info("[ Kakao Service ] ProfileImageUrl ---> {} ", userInfoDTO.getKakaoAccount().getProfile().getProfileImageUrl());

        return userInfoDTO;
    }
}

