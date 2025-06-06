package com.utn.demo.dto;

import com.fasterxml.jackson.annotation.JsonIgnore;
import com.fasterxml.jackson.annotation.JsonProperty;
import jakarta.validation.constraints.Email;
import lombok.Data;
import lombok.NonNull;
import lombok.RequiredArgsConstructor;

@RequiredArgsConstructor
@Data
public class UserDTO {

    private Long id;

    @JsonProperty("completeName")
    @NonNull
    private String name;

    @JsonIgnore
    @NonNull
    private String country;

    @Email
    private String mail;

}
