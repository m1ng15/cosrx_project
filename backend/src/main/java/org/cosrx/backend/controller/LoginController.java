package org.cosrx.backend.controller;

import jakarta.servlet.ServletException;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;
import jakarta.servlet.http.HttpSession;
import lombok.RequiredArgsConstructor;
import lombok.extern.log4j.Log4j2;
import org.cosrx.backend.dto.LoginDTO;
import org.cosrx.backend.dto.UserDTO;
import org.cosrx.backend.service.LoginServiceIf;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;

import java.io.IOException;
import java.util.Arrays;

@Controller
@Log4j2
@RequiredArgsConstructor

public class LoginController {

    private final LoginServiceIf loginServiceIf;

//    로그인 페이지 이동
    @GetMapping("/login")
    public String loginGet(HttpServletRequest req, HttpServletResponse resp) throws IOException, ServletException {
        System.out.println("🔍 Get /login 도착!");

        req.getParameterMap().forEach((key, value) -> {
            System.out.println("👉 " + key + " = " + Arrays.toString(value));
        });
    return "login";
    }

    @PostMapping("/login")
    public String loginPost(HttpServletRequest req, HttpServletResponse resp, LoginDTO loginDTO) throws IOException, ServletException {
        System.out.println("🔍 POST /login 도착!");
        String userId = req.getParameter("userId");
        String pwd = req.getParameter("pwd");
        System.out.println("userId = " + userId + ", pwd = " + pwd);

        HttpSession session = req.getSession();
        session.setAttribute("userId", userId);
        UserDTO loginMemberDTO = loginServiceIf.login_info(loginDTO);
//        빈 값 입력 X 일때
        if(loginMemberDTO != null && loginMemberDTO.getUserId() != null) {
//            아이디 체크
            if(loginMemberDTO.getUserId().equals(userId)) {
//                비밀번호 체크
                if(loginMemberDTO.getPassword().equals(pwd)) {
                    session.setAttribute("loginMemberDTO", loginMemberDTO);
                    return "redirect:/";
                } else {
                    System.out.println("비밀번호 틀림");
                    return "redirect:/login";
                }
            }
            else{
                System.out.println("아이디 틀림");
                return "redirect:/login";
            }
        }
        System.out.println("로그인 실패");
        return "redirect:/login";
    }

}
