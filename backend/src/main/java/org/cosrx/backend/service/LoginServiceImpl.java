package org.cosrx.backend.service;

import org.cosrx.backend.domain.UserEntity;
import org.cosrx.backend.dto.LoginDTO;
import org.cosrx.backend.dto.UserDTO;
import org.cosrx.backend.repository.LoginRepository;
import org.modelmapper.ModelMapper;

import java.util.Optional;

public class LoginServiceImpl implements LoginServiceIf {
//    private final ModelMapper modelMapper;
//    private final LoginRepository loginRepository;
//
    @Override
    public UserDTO login(LoginDTO loginDTO) {
//        Optional<UserEntity> result = loginRepository.findByUserId(loginDTO.getUserId());
//        UserEntity user = result.orElse(null);
//        UserDTO userDTO = modelMapper.map(user, UserDTO.class);
//        return userDTO;
        return null;
    }


}