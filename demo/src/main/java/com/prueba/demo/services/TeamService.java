package com.prueba.demo.services;

import com.prueba.demo.dtos.Team;
import com.prueba.demo.repositories.TeamRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.ArrayList;
import java.util.List;

@Service
public class TeamService {

    @Autowired
    private TeamRepository teamRepository;

    public List<Team> getAllTeams(){
       return  teamRepository.getAllTeams();
    }

}
