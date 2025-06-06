package org.cosrx.backend.config.kakao;

import org.springframework.beans.factory.annotation.Value;
import org.springframework.context.annotation.Configuration;

@Configuration
public class KakaoConfig{

    @Value("${kakao.client_id}")
    private String clientId;

    @Value("${kakao.redirect_uri}")
    private String redirectUri;

    public String getClientId() {
        return clientId;
    }
    public String getRedirectUri() {
        return redirectUri;
    }

}