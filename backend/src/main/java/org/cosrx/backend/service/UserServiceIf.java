package org.cosrx.backend.service;

import org.cosrx.backend.dto.LoginDTO;
import org.cosrx.backend.dto.UserDTO;


public interface UserServiceIf {
    UserDTO login(LoginDTO loginDTO);
}
