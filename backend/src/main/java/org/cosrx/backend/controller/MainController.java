package org.cosrx.backend.controller;

import lombok.RequiredArgsConstructor;
import lombok.extern.log4j.Log4j2;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;

@Log4j2
@Controller
@RequiredArgsConstructor

public class MainController {

    @GetMapping("/")
    public String mainGet() {
     return "index";
    }


}
