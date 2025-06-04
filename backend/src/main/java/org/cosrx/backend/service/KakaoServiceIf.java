package org.cosrx.backend.service;

import org.cosrx.backend.dto.KakaoUserInfoResDTO;

public interface KakaoServiceIf {
//    public KakaoService(String clientId);

    public String getAccessTokenKakao(String code);
    public KakaoUserInfoResDTO getUserInfo(String accessToken);
}
