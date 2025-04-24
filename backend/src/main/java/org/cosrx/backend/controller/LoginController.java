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
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.servlet.mvc.support.RedirectAttributes;

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
    public String loginPost(HttpServletRequest req, HttpServletResponse resp, LoginDTO loginDTO, RedirectAttributes redirectAttributes) throws IOException, ServletException {
//        String userId = req.getParameter("userId");
//        String pwd = req.getParameter("pwd");
        String userId = loginDTO.getUserId();
        String pwd = loginDTO.getPassword();
        System.out.println("userId = " + userId + ", pwd = " + pwd);

//        빈 값 검사
        if (userId == null || userId.isBlank() || pwd == null || pwd.isBlank()) {
            redirectAttributes.addFlashAttribute("error", "아이디와 비밀번호를 입력해주세요.");
            return "redirect:/login";
        }

        HttpSession session = req.getSession();
        session.setAttribute("userId", userId);
        System.out.println("loginDTO = " + loginDTO);
        UserDTO loginMemberDTO = loginServiceIf.login_info(loginDTO);
//        아이디가 있는지 없는지부터 체크
        System.out.println("loginMemberDTO = " + loginMemberDTO);
        if(loginMemberDTO == null) {
            redirectAttributes.addFlashAttribute("error", "아이디가 존재하지 않습니다.");
            return "redirect:/login";
        } else { //아이디가 있는 경우
            if(!loginMemberDTO.getPassword().equals(pwd)) { //비밀번호가 틀리다면
                redirectAttributes.addFlashAttribute("error", "비밀번호가 틀렸습니다.");
                return "redirect:/login";
            } else { //아이디 패스워드 동일한 경우
                session.setAttribute("loginMemberDTO", loginMemberDTO);
                return "redirect:/";
            }
        }
    }
}
