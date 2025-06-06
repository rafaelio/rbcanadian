package com.utn.demo.controllers;

import com.utn.demo.dto.UserDTO;
import jakarta.validation.Valid;
import lombok.extern.slf4j.Slf4j;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.net.URI;

@Slf4j
@RestController
@RequestMapping("/users")
public class HolaMundoRestController {


    @GetMapping("/{userId}")
    public ResponseEntity<UserDTO> getUserById(@PathVariable Long userId){

        if (userId<1){
            return ResponseEntity.badRequest().build();
        }

        if (userId>1000){
            return ResponseEntity.notFound().build();
        }

        UserDTO user =  new UserDTO("ra","ar");
        return ResponseEntity.ok(user);
    }

    @DeleteMapping("/{userId}")
    public ResponseEntity<Void> deleteUserById(@PathVariable Long userId){
        //TODO Codigo para eliminar usuario
        log.info("user {} deleted",userId);
        return ResponseEntity.noContent().build();
    }

    @PutMapping("/{userId}")
    public ResponseEntity<UserDTO> updateUserById(@PathVariable Long userId, @RequestBody UserDTO userDTO){
        log.info("user {} updated",userDTO.getName());
        return ResponseEntity.ok(userDTO);
    }

    @PostMapping
    public ResponseEntity<UserDTO> createUsers(@RequestBody @Valid UserDTO userDTO){

        if (userDTO.getName().equals("Rafael")){
            return ResponseEntity.status(HttpStatus.CONFLICT).build();
        }

        log.info("User {}", userDTO.getName());
        return ResponseEntity.created(URI.create("/users/" + userDTO.getId())).body(userDTO);
    }

}
