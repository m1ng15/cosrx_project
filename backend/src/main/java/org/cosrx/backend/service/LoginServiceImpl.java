package org.cosrx.backend.service;

import lombok.RequiredArgsConstructor;
import lombok.extern.log4j.Log4j2;
import org.cosrx.backend.domain.UserEntity;
import org.cosrx.backend.dto.LoginDTO;
import org.cosrx.backend.dto.UserDTO;
import org.cosrx.backend.repository.LoginRepository;
import org.modelmapper.ModelMapper;
import org.springframework.stereotype.Service;

import java.util.Optional;

@Log4j2
@Service
@RequiredArgsConstructor
public class LoginServiceImpl implements LoginServiceIf {
    private final ModelMapper modelMapper;
    private final LoginRepository loginRepository;
//
    @Override
    public UserDTO login_info(LoginDTO loginDTO) {
        Optional<UserEntity> result = loginRepository.findByUserId(loginDTO.getUserId());
        UserEntity user = result.orElse(null);
        UserDTO userDTO = modelMapper.map(user, UserDTO.class);
        return userDTO;
    }


}