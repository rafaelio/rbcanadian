package com.prueba.demo.repositories;

import com.prueba.demo.dtos.Team;
import org.springframework.stereotype.Service;

import java.util.ArrayList;
import java.util.List;

@Service
public class TeamRepository {

    public List<Team> getAllTeams(){
        List<Team> teams = new ArrayList<Team>();

        Team team = new Team();
        team.setId(1);
        team.setName("River Plate");
        teams.add(team);

        Team team2 = new Team();
        team2.setId(2);
        team2.setName("Boca Juniors");
        teams.add(team2);


        return teams;
    }


}
