package org.cosrx.backend.controller;

import jakarta.servlet.ServletException;
import jakarta.servlet.http.Cookie;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;
import jakarta.servlet.http.HttpSession;
import lombok.RequiredArgsConstructor;
import lombok.extern.log4j.Log4j2;
import org.cosrx.backend.config.JwtUtil;
import org.cosrx.backend.config.KakaoConfig;
import org.cosrx.backend.dto.LoginDTO;
import org.cosrx.backend.dto.UserDTO;
import org.cosrx.backend.service.LoginServiceIf;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.factory.annotation.Value;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
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
//    private KakaoConfig kakaoConfig;
    private final JwtUtil jwtUtil;



    //    로그인 페이지 이동
    @GetMapping("/login")
    public String loginGet(HttpServletRequest req, HttpServletResponse resp, Model model) throws IOException, ServletException {
        System.out.println("🔍 Get /login 도착!");

        req.getParameterMap().forEach((key, value) -> {
            System.out.println("👉 " + key + " = " + Arrays.toString(value));
        });

        String location = "https://kauth.kakao.com/oauth/authorize?response_type=code&client_id="+client_id+"&redirect_uri="+redirect_uri;
        model.addAttribute("location", location);
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
//        UserDTO loginMemberDTO = loginServiceIf.login_info(loginDTO);
        String result = loginServiceIf.login_info(loginDTO);
//        아이디가 있는지 없는지부터 체크
//        System.out.println("loginMemberDTO = " + loginMemberDTO);
//        if(loginMemberDTO == null) {
        if("NoUser".equals(result)) {
            redirectAttributes.addFlashAttribute("error", "아이디가 존재하지 않습니다.");
            return "redirect:/login";
        }
        if("WrongPwd".equals(result)) {
            redirectAttributes.addFlashAttribute("error", "비밀번호가 존재하지 않습니다.");
            return "redirect:/login";
        }

//        session.setAttribute("jwtToken", result);
//        jwt를 쿠키에 저장
        Cookie jwtCookie = new Cookie("jwtToken", result);
        jwtCookie.setHttpOnly(true);//(자바스크립트 접근 불가)
        jwtCookie.setSecure(true);//HTTPS 환경에서만 전송
        jwtCookie.setPath("/");//모든 경로에서 접근 가능
        jwtCookie.setMaxAge(3600);//지속시간

        resp.addCookie(jwtCookie);

        return "redirect:/";
    }

//    카카오 로그인


}
