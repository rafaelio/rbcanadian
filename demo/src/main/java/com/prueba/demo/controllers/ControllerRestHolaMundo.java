package com.prueba.demo.controllers;

import com.prueba.demo.dtos.Team;
import com.prueba.demo.services.TeamService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;


import java.util.List;

@RestController
public class ControllerRestHolaMundo {

    @Autowired
    private TeamService teamService;

    @GetMapping("/team")
    public List<Team> getTeam(){
        return teamService.getAllTeams();
    }


}
