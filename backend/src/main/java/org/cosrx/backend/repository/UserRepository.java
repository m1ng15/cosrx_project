package org.cosrx.backend.repository;

import org.cosrx.backend.domain.UserEntity;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;
import org.springframework.stereotype.Repository;

import java.util.Optional;

@Repository
public interface UserRepository extends JpaRepository<UserEntity, Long> {
//    카카오 로그인시 존재하는 지 확인 하는 로직
    Optional<UserEntity> findByKakaoId(String userId);
//  kakaoIC로 uuid 찾아오기
    @Query("SELECT u.uuid FROM UserEntity u WHERE u.kakaoId = :kakaoId")
    Optional<String> findUuidByUserId(@Param("kakaoId") String userId);

}
