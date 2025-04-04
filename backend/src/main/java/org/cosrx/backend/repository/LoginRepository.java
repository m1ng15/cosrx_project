package org.cosrx.backend.repository;

import org.cosrx.backend.domain.UserEntity;

import java.util.Optional;

public interface LoginRepository {

    Optional<UserEntity> findByUserId(String userId);
}
