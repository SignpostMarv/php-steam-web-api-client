<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class IDOTA2Match_205790 extends AbstractInterface
{
    /**
     * /IDOTA2Match_205790/GetLeagueListing/v1/
     *
     */
    public function GetLeagueListingV1()
    {
        return $this->_call(__METHOD__, 'GET', array());
    }
    /**
     * /IDOTA2Match_205790/GetLiveLeagueGames/v1/
     *
     * @param uint32 $league_id Only show matches of the specified league id
     * @param uint64 $match_id Only show matches of the specified match id
     */
    public function GetLiveLeagueGamesV1(string $league_id = null, string $match_id = null)
    {
        return $this->_call(__METHOD__, 'GET', array('league_id' => $league_id, 'match_id' => $match_id));
    }
    /**
     * /IDOTA2Match_205790/GetMatchDetails/v1/
     *
     * @param uint64 $match_id Match id
     */
    public function GetMatchDetailsV1(string $match_id)
    {
        return $this->_call(__METHOD__, 'GET', array('match_id' => $match_id));
    }
    /**
     * /IDOTA2Match_205790/GetMatchHistory/v1/
     *
     * @param uint32 $hero_id The ID of the hero that must be in the matches being queried
     * @param uint32 $game_mode Which game mode to return matches for
     * @param uint32 $skill The average skill range of the match, these can be [1-3] with lower numbers being lower skill. Ignored if an account ID is specified
     * @param string $min_players Minimum number of human players that must be in a match for it to be returned
     * @param string $account_id An account ID to get matches from. This will fail if the user has their match history hidden
     * @param string $league_id The league ID to return games from
     * @param uint64 $start_at_match_id The minimum match ID to start from
     * @param string $matches_requested The number of requested matches to return
     * @param string $tournament_games_only Whether or not tournament games should only be returned
     */
    public function GetMatchHistoryV1(string $hero_id = null, string $game_mode = null, string $skill = null, string $min_players = null, string $account_id = null, string $league_id = null, string $start_at_match_id = null, string $matches_requested = null, string $tournament_games_only = null)
    {
        return $this->_call(__METHOD__, 'GET', array('hero_id' => $hero_id, 'game_mode' => $game_mode, 'skill' => $skill, 'min_players' => $min_players, 'account_id' => $account_id, 'league_id' => $league_id, 'start_at_match_id' => $start_at_match_id, 'matches_requested' => $matches_requested, 'tournament_games_only' => $tournament_games_only));
    }
    /**
     * /IDOTA2Match_205790/GetMatchHistoryBySequenceNum/v1/
     *
     * @param uint64 $start_at_match_seq_num
     * @param uint32 $matches_requested
     */
    public function GetMatchHistoryBySequenceNumV1(string $start_at_match_seq_num = null, string $matches_requested = null)
    {
        return $this->_call(__METHOD__, 'GET', array('start_at_match_seq_num' => $start_at_match_seq_num, 'matches_requested' => $matches_requested));
    }
    /**
     * /IDOTA2Match_205790/GetScheduledLeagueGames/v1/
     *
     * @param uint32 $date_min The starting time stamp to collect scheduled games from. If ignored, it will use the current time
     * @param uint32 $date_max The ending time stamp. If this is more than 7 days past the starting time stamp, it will be clamped to 7 days.
     */
    public function GetScheduledLeagueGamesV1(string $date_min = null, string $date_max = null)
    {
        return $this->_call(__METHOD__, 'GET', array('date_min' => $date_min, 'date_max' => $date_max));
    }
    /**
     * /IDOTA2Match_205790/GetTeamInfoByTeamID/v1/
     *
     * @param uint64 $start_at_team_id
     * @param uint32 $teams_requested
     */
    public function GetTeamInfoByTeamIDV1(string $start_at_team_id = null, string $teams_requested = null)
    {
        return $this->_call(__METHOD__, 'GET', array('start_at_team_id' => $start_at_team_id, 'teams_requested' => $teams_requested));
    }
    /**
     * /IDOTA2Match_205790/GetTopLiveGame/v1/
     *
     * @param int32 $partner Which partner's games to use.
     */
    public function GetTopLiveGameV1(integer $partner)
    {
        return $this->_call(__METHOD__, 'GET', array('partner' => $partner));
    }
    /**
     * /IDOTA2Match_205790/GetTopWeekendTourneyGames/v1/
     *
     * @param int32 $partner Which partner's games to use.
     * @param int32 $home_division Prefer matches from this division.
     */
    public function GetTopWeekendTourneyGamesV1(integer $partner, integer $home_division = null)
    {
        return $this->_call(__METHOD__, 'GET', array('partner' => $partner, 'home_division' => $home_division));
    }
    /**
     * /IDOTA2Match_205790/GetTournamentPlayerStats/v1/
     *
     * @param string $account_id
     * @param string $league_id
     * @param string $hero_id
     * @param string $time_frame
     * @param uint64 $match_id
     * @param uint32 $phase_id
     */
    public function GetTournamentPlayerStatsV1(string $account_id, string $league_id = null, string $hero_id = null, string $time_frame = null, string $match_id = null, string $phase_id = null)
    {
        return $this->_call(__METHOD__, 'GET', array('account_id' => $account_id, 'league_id' => $league_id, 'hero_id' => $hero_id, 'time_frame' => $time_frame, 'match_id' => $match_id, 'phase_id' => $phase_id));
    }
    /**
     * /IDOTA2Match_205790/GetTournamentPlayerStats/v2/
     *
     * @param string $account_id
     * @param string $league_id
     * @param string $hero_id
     * @param string $time_frame
     * @param uint64 $match_id
     * @param uint32 $phase_id
     */
    public function GetTournamentPlayerStatsV2(string $account_id, string $league_id = null, string $hero_id = null, string $time_frame = null, string $match_id = null, string $phase_id = null)
    {
        return $this->_call(__METHOD__, 'GET', array('account_id' => $account_id, 'league_id' => $league_id, 'hero_id' => $hero_id, 'time_frame' => $time_frame, 'match_id' => $match_id, 'phase_id' => $phase_id));
    }
}
