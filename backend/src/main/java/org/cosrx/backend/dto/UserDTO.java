package org.cosrx.backend.dto;

import jakarta.persistence.Column;
import jakarta.validation.constraints.NotEmpty;
import lombok.AllArgsConstructor;
import lombok.Builder;
import lombok.Data;
import lombok.NoArgsConstructor;
import org.springframework.data.annotation.CreatedDate;
import org.springframework.data.annotation.LastModifiedDate;

import java.time.LocalDateTime;

@Data
@AllArgsConstructor
@NoArgsConstructor
@Builder
public class UserDTO {

    private long id;
    private String uuid;

    private String userId;

    private String password;

    private String name;

    private String email;

    private String phone;

    private String addr1;

    private String addr2;

    private String zipcode;

    private String delete_YN;

    private LocalDateTime delete_date;

    private LocalDateTime regDate;

    private LocalDateTime modifyDate;

}
