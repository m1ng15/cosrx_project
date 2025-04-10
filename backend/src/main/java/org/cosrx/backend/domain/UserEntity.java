package org.cosrx.backend.domain;

import jakarta.persistence.*;
import lombok.AllArgsConstructor;
import lombok.Builder;
import lombok.Getter;
import lombok.NoArgsConstructor;

import java.time.LocalDateTime;

@AllArgsConstructor
@NoArgsConstructor
@Builder
@Getter
@Entity
@Table(name = "user_table")
public class UserEntity extends BaseEntity {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(unique = true, nullable = false)
    private long id;

    @Column(nullable = false, length = 35, unique = true)
    private String uuid;

    @Column(nullable = false, length = 20)
    private String userId;

    @Column(nullable = false, length = 255)
    private String password;

    @Column(nullable = false, length = 40)
    private String name;

    @Column(nullable = false, length = 100)
    private String email;

    @Column(nullable = false, length = 20)
    private String phone;

    @Column(nullable = true, length = 100)
    private String addr1;

    @Column(nullable = true, length = 100)
    private String addr2;

    @Column(nullable = true, length = 100)
    private String zipcode;

    @Column(nullable = false, columnDefinition = "CHAR(1) DEFAULT 'N'")
    private String delete_YN;

    @Column(nullable = true)
    private LocalDateTime delete_date;

}
