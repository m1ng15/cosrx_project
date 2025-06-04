package org.cosrx.backend.service;

import lombok.RequiredArgsConstructor;
import lombok.extern.log4j.Log4j2;
import org.cosrx.backend.config.JwtUtil;
import org.cosrx.backend.domain.UserEntity;
import org.cosrx.backend.dto.LoginDTO;
import org.cosrx.backend.dto.UserDTO;
import org.cosrx.backend.repository.LoginRepository;
import org.modelmapper.ModelMapper;
import org.springframework.security.crypto.bcrypt.BCryptPasswordEncoder;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import java.util.Optional;

@Log4j2
@Service
@Transactional
@RequiredArgsConstructor
public class LoginServiceImpl implements LoginServiceIf {
    private final ModelMapper modelMapper;
    private final LoginRepository loginRepository;
    private final PasswordEncoder passwordEncoder;
    private final JwtUtil jwtUtil;

//
    @Override
//    public UserDTO login_info(LoginDTO loginDTO) {
        public String login_info(LoginDTO loginDTO){
        Optional<UserEntity> result = loginRepository.findByUserId(loginDTO.getUserId());
        if(result.isEmpty()) {
            return "NoUser";
        }
//        UserEntity user = result.orElse(null);
        UserEntity user = result.get();
//        PasswordEncoder encoder = new BCryptPasswordEncoder();
//        String encoded = encoder.encode("1234");
//        System.out.println(encoded);
//        System.out.println("DB 저장된 비밀번호: " + user.getPassword());
//        System.out.println("입력 비밀번호: " + loginDTO.getPassword());
//        System.out.println("비교 결과: " + passwordEncoder.matches(loginDTO.getPassword(), user.getPassword()));

        if( !passwordEncoder.matches(loginDTO.getPassword(), user.getPassword())) {
//            throw new RuntimeException("비밀번호가 일치하지 않습니다.");
            return "WrongPwd";
        }

        return jwtUtil.generateToken(user.getUserId(), user.getUuid());
//        UserDTO userDTO = modelMapper.map(user, UserDTO.class);
//        return userDTO;
    }


}