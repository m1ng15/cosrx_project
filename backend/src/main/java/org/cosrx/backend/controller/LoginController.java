package org.cosrx.backend.controller;

import lombok.RequiredArgsConstructor;
import lombok.extern.log4j.Log4j2;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
@Log4j2
@RequiredArgsConstructor

public class LoginController {
//    로그인 페이지 이동
    @GetMapping("/login")
    public String login() {
        return "login";
    }

}
