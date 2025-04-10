package org.cosrx.backend.service;

import org.cosrx.backend.dto.LoginDTO;
import org.cosrx.backend.dto.UserDTO;

public interface LoginServiceIf {
    public UserDTO login_info(LoginDTO loginDTO);
}
