package org.cosrx.backend.controller;

import com.fasterxml.jackson.core.JsonProcessingException;
import com.fasterxml.jackson.databind.ObjectMapper;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpSession;
import lombok.RequiredArgsConstructor;
import lombok.extern.slf4j.Slf4j;
import org.cosrx.backend.config.JwtUtil;
import org.cosrx.backend.config.kakao.LoginType;
import org.cosrx.backend.domain.UserEntity;
import org.cosrx.backend.dto.KakaoUserInfoResDTO;
import org.cosrx.backend.repository.UserRepository;
import org.cosrx.backend.service.KakaoServiceImpl;
import org.springframework.http.HttpHeaders;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseCookie;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

import java.net.URI;
import java.util.Optional;
import java.util.UUID;

@Slf4j
@RestController
@RequiredArgsConstructor
@RequestMapping("")
public class KakaoLoginController {

    private final KakaoServiceImpl kakaoServiceimpl;
    private final UserRepository userRepository;
    private final JwtUtil jwtUtil;

    @GetMapping("/resOk")
    public ResponseEntity<?> resOk(@RequestParam("code") String code, HttpServletRequest req) throws JsonProcessingException {
        HttpHeaders headers = new HttpHeaders();
        String goPath = "";
        log.info("카카오 인가코드 : {}", code);
        String accessToken = kakaoServiceimpl.getAccessTokenKakao(code);
        KakaoUserInfoResDTO userInfo = kakaoServiceimpl.getUserInfo(accessToken);
        log.info("사용자 아이디 : {}", userInfo.getId());
        Optional<UserEntity> existUser = userRepository.findByKakaoId(userInfo.getId().toString());
//        카카오유저아이디로 uuid 찾아오는 로직
        Optional<String> userUuid = userRepository.findUuidByUserId(userInfo.getId().toString());
//        기존 회원
        if(existUser.isPresent()) {
            ObjectMapper objectMapper = new ObjectMapper();
            String userInfoJson = objectMapper.writeValueAsString(userInfo);
            log.info("카카오 유저 정보: {}", userInfoJson);
            log.info("카카오 유저 id: {}", userInfo.getId());
            log.info("카카오 유저 UUID: {}", userUuid);
//            headers.setLocation(URI.create("/"));
//            return new ResponseEntity<>(headers, HttpStatus.FOUND);
            goPath = "/";
        }
//        새로 가입하는 회원
        else {
            LoginType loginT = LoginType.KAKAO;
            String kakaoId = userInfo.getId().toString();

            UserEntity newUser = UserEntity.builder()
                    .kakaoId(kakaoId)
                    .uuid(UUID.nameUUIDFromBytes(kakaoId.getBytes()).toString())
                    .name(userInfo.getKakaoAccount().getProfile().getNickname())
                    .password(UUID.randomUUID().toString())
                    .email(userInfo.getKakaoAccount().getEmail())
                    .nickname(userInfo.getKakaoAccount().getProfile().getNickname())
                    .profileImage(userInfo.getKakaoAccount().getProfile().getProfileImageUrl())
                    .delete_YN("N")
                    .role("USER")
                    .loginType(loginT)
                    .build();

            log.info("새 유저 저장 시도: {}", newUser.getUuid());
            userRepository.save(newUser);
            log.info("저장 완료!");
            goPath = "/";
            //TODO : 나중에 회원가입 페이지에서 비밀번호 변경 또는, 변경

        }
//        로그인 성공 후, jwt 토큰 생성
        String token = jwtUtil.generateToken(userInfo.getId().toString(), userUuid.toString());
        ResponseCookie cookie = ResponseCookie.from("jwtToken", token)
                .httpOnly(true)
                .path("/")
                .maxAge(60 * 60)
                .build();
        log.info("로그인 후 jwt토큰 생성 완료");
        HttpSession session = req.getSession();
        session.setAttribute("userId", userInfo.getId());

        headers.setLocation(URI.create(goPath));
        headers.add(HttpHeaders.SET_COOKIE, cookie.toString());
        return new ResponseEntity<>(headers, HttpStatus.FOUND);
    }
}
