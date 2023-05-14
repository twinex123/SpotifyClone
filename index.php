<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify Clone | Twinex</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/29ce918257.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="container">
        <div class="component_actions">
            <div class="actions">
                <ul>
                    <li class="home">
                        <img src="assets/icons/home_icon.svg" alt="Home icon">
                        <h4>Accueil</h4>
                    </li>   
                    <li class="search">
                        <img src="assets/icons/search_icon.svg" alt="Search icon">
                        <h4>Rechercher</h4>
                    </li>
                </ul>
            </div>
        </div>
        <div class="component_library">
            <div class="library_top">
                <img src="assets/icons/library_icon.svg" alt="Library Icon">
                <h4>Bibliothèque</h4>
                <div class="lib_actions">
                    <div class="add">
                        <img src="assets/icons/add_icon.svg" alt="Add icon">
                    </div>
                    <div class="next">
                        <img src="assets/icons/right_arrow.svg" alt="Right arrow">
                    </div>
                </div>
                
            </div>
            <div class="choices">
                <div class="choice">Playlists</div>
                <div class="choice">Podcasts et émissions</div>
                <!-- <div class="choice">Albums</div>
                <div class="choice">Artistes</div> -->
            </div>
            <div class="lib_search">
                <div class="left_lib_search">
                    <div class="lib_search_icon">
                        <img src="assets/icons/search_icon.svg" alt="Search Icon">
                    </div>
                    <div class="no_show">
                        <input type="text" placeholder="Recherche dans la Bibliothèque">
                    </div>
                </div>
                <div class="right_lib_search">
                    <div class="select">
                        
                        <select name="lib_select" id="lib_select">
                            <option value="">Récents</option>
                            
                            <option value="recent">Récents</option>
                            <option value="add_recent">Ajoutés Récemments</option>
                            <option value="alphabet">Ordre alphabétique</option>
                            <option value="creator">Créeateur</option>
                        </select>

                    </div>
                </div>
            </div>
            <div class="lib_songs">
                <div class="lib_song">
                    <div class="card_img" style="background-image: url(assets/img/likedSongs.png);">

                    </div>
                    <div class="song_title">
                        <h4 class="title">Titres Likés</h4>
                        <h6 class="artist">
                            <i class="fa-sharp fa-solid fa-thumbtack"></i>
                            <span>Playlist • 4 titres</span>
                        </h6>
                    </div>
                </div>
                <div class="lib_song">
                    <div class="card_img" style="background-image: url(assets/img/yourEpisodes.png);">

                    </div>
                    <div class="song_title">
                        <h4 class="title">Vos Épisodes</h4>
                        <h6 class="artist">
                            <i class="fa-sharp fa-solid fa-thumbtack"></i>
                            <span>Épisodes sauvegardés </span>
                        </h6>
                    </div>
                </div>
                <div class="lib_song">
                    <div class="card_img" style="background-image: url(assets/img/playlists/chill.png);">

                    </div>
                    <div class="song_title">
                        <h4 class="title">Chill</h4>
                        <h6 class="artist">
                            <span>Playlist • Flo</span>
                        </h6>
                    </div>
                </div>
                <div class="lib_song">
                    <div class="card_img" style="background-image: url(assets/img/playlists/bloII.png);">

                    </div>
                    <div class="song_title">
                        <h4 class="title">Blo II</h4>
                        <h6 class="artist">
                            <span>Album • 13 Block</span>
                        </h6>
                    </div>
                </div>
                <div class="lib_song">
                    <div class="card_img" style="background-image: url(assets/img/playlists/wiloo.png);">

                    </div>
                    <div class="song_title">
                        <h4 class="title">Wiloo</h4>
                        <h6 class="artist">
                            <span>Podcast • Wiloo</span>
                        </h6>
                    </div>
                </div>
                <div class="lib_song">
                    <div class="card_img" style="background-image: url(assets/img/playlists/rap2021.png);">

                    </div>
                    <div class="song_title">
                        <h4 class="title">Rap 2021-2022</h4>
                        <h6 class="artist">
                            <span>Playlist • Flo</span>
                        </h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="component_main">
            <div class="main_top">
                <div class="arrows">
                    <div class="arrow_left arrow">
                        <img src="assets/icons/left_arrow.svg" alt="Left Arrow">
                    </div>
                    <div class="arrow_right arrow">
                        <img src="assets/icons/right_arrow.svg" alt="Right Arrow">
                    </div>
                </div>
                <div class="right_main">
                    <div class="subscribe">
                        <button>
                            S'abonner
                        </button>
                    </div>
                    <div class="profile">
                        <div class="profile_picture">

                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="titles_main">
                    <h1>Écoutés récemments</h1>
                    <div class="title_right">
                        <p>Tout afficher</p>
                    </div>
                </div>
                

                <div class="cards_container" class="recent_listen">
                    <div class="card">
                        <div class="img_card" style="background-image: url('assets/img/songs/stan.png');">

                        </div>
                        <div class="title_card">
                            <h2>Stan</h2>
                        </div>
                        <div class="artist_card">
                            <h4>Eminem</h4>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img_card" style="background-image: url('assets/img/songs/russ.png');">

                        </div>
                        <div class="title_card">
                            <h2>Dancer (feat. Noisy, Rondodasosa & Capo Plaza)</h2>
                        </div>
                        <div class="artist_card">
                            <h4>Russ Millions • Noisy • Rondodasosa • Capo Plaza</h4>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img_card" style="background-image: url('assets/img/playlists/chill.png');">

                        </div>
                        <div class="title_card">
                            <h2>Chill</h2>
                        </div>
                        <div class="artist_card">
                            <h4>Par Flo</h4>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img_card" style="background-image: url('assets/img/playlists/bloII.png');">

                        </div>
                        <div class="title_card">
                            <h2>Blo II</h2>
                        </div>
                        <div class="artist_card">
                            <h4>13 Block</h4>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img_card" style="background-image: url('assets/img/playlists/rap2021.png');">

                        </div>
                        <div class="title_card">
                            <h2>Rap 2021-2022</h2>
                        </div>
                        <div class="artist_card">
                            <h4>Par Flo</h4>
                        </div>
                    </div>
                </div>

                <div class="titles_main" style="margin-top: 40px;">
                    <h1>Conçu pour Flo</h1>
                    <div class="title_right">
                        <p>Tout afficher</p>
                    </div>
                </div>

                <div class="cards_container" class="recent_listen">
                    <div class="card">
                        <div class="img_card" style="background-image: url('assets/img/playlists/daily1.png');">

                        </div>
                        <div class="title_card">
                            <h2>Daily Mix 1</h2>
                        </div>
                        <div class="artist_card">
                            <h4>Central Cee, Russ Millions, BM et bien plus</h4>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img_card" style="background-image: url('assets/img/playlists/daily2.png');">

                        </div>
                        <div class="title_card">
                            <h2>Daily Mix 2</h2>
                        </div>
                        <div class="artist_card">
                            <h4>Russ Millions • Noisy • Rondodasosa • Capo Plaza</h4>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img_card" style="background-image: url('assets/img/playlists/daily3.png');">

                        </div>
                        <div class="title_card">
                            <h2>Daily Mix 3</h2>
                        </div>
                        <div class="artist_card">
                            <h4>Par Flo</h4>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img_card" style="background-image: url('assets/img/playlists/daily4.png');">

                        </div>
                        <div class="title_card">
                            <h2>Daily Mix 4</h2>
                        </div>
                        <div class="artist_card">
                            <h4>13 Block</h4>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img_card" style="background-image: url('assets/img/playlists/daily5.png');">

                        </div>
                        <div class="title_card">
                            <h2>Daily Mix 5</h2>
                        </div>
                        <div class="artist_card">
                            <h4>Par Flo</h4>
                        </div>
                    </div>
                </div>

                <div class="titles_main" style="margin-top: 40px;">
                    <h1>Vos émissions</h1>
                    <!-- <div class="title_right">
                        <p>Tout afficher</p>
                    </div> -->
                </div>

                <div class="cards_container" class="recent_listen">
                    <div class="card">
                        <div class="img_card" style="background-image: url('assets/img/playlists/wiloo.png');">

                        </div>
                        <div class="title_card">
                            <h2>Wiloo</h2>
                        </div>
                        <div class="artist_card">
                            <h4>Wiloo</h4>
                        </div>
                    </div>
                    
                </div>

                <div class="titles_main" style="margin-top: 40px;">
                    <h1 style="font-size: 2em;">Bonsoir</h1>
                </div>

                <div class="grid_songs">
                    <div class="grid1">
                        <div class="song1 song">
                            <img src="assets/img/songs/russ.png" alt="Song" class="song_img">
                            <h2>Dancer (feat. Noisy, Rondodasosa & Capo Plaza)</h2>
                        </div>
                        <div class="song2 song">
                            <img src="assets/img/playlists/chill.png" alt="Song" class="song_img">
                            <h2>Chill</h2>
                        </div>
                        <div class="song3 song">
                            <img src="assets/img/playlists/bloII.png" alt="Song" class="song_img">
                            <h2>Blo II</h2>
                        </div>
                    </div>
                    <br>
                    <div class="grid2">
                        <div class="song4 song">
                            <img src="assets/img/playlists/rap2021.png" alt="Song" class="song_img">
                            <h2>Rap 2021-2022</h2>
                        </div>
                        <div class="song5 song">
                            <img src="assets/img/songs/stan.png" alt="Song" class="song_img">
                            <h2>Stan</h2>
                        </div>
                        <div class="song6 song">
                            <img src="assets/img/playlists/wiloo.png" alt="Song" class="song_img">
                            <h2>Wiloo</h2>
                        </div>
                    </div>
                    <br><br><br><br>
                    <br><br><br><br>
                    
                    
                </div>
                
            </div>
        </div>
    </div>
    <div class="listeningBar">
        <div class="listeningLeft">
            <div class="listeningSongImg" style="background: url('assets/img/playlists/chill.png');">

            </div>
            <div class="listeningSongTitle">    
                <h2>Night Away (Dance) (feat. Tyon Wayne)</h2>
            </div>  
            <div class="listeningSongArtists">
                <h4>A1 x J1, Tyon Wayne</h4>
            </div>

            <div class="likedSong">
                <img src="assets/icons/heart_icon.svg" alt="Heart Icon">
            </div>
        </div>
        <div class="listeningCenter">
            <div class="listeningActions">
                <div class="action_random listening_action">
                    <img src="assets/icons/random_icon.svg" alt="Random Icon">
                </div>
                <div class="action_previous listening_action">
                    <img src="assets/icons/previous_icon.svg" alt="Previous Icon">
                </div>
                <div class="action_play listening_action">
                    <img src="assets/icons/play_icon.svg" alt="play Icon" id="listening_icon">
                </div>
                <div class="action_next listening_action">
                    <img src="assets/icons/next_icon.svg" alt="next Icon">
                </div>
                <div class="action_repeat listening_action">
                    <img src="assets/icons/repeat_icon.svg" alt="Repeat Icon">
                </div>

                <br>
                
            </div>
            <div class="bar">
                <div class="bar_left">
                    <p class="current_time">0:00</p>
                </div>
                <div class="progress_bar">
                    <div class="progress_line">

                    </div>
                    <div class="progress_round">

                    </div>
                </div>
                <div class="bar_right">
                    <p class="total_time">0:00</p>
                </div>
            </div>
            
            <!-- <div class="listeningBar">
                <div class="audio-player">
                    <div class="progress-bar">
                        <div class="progress"></div>
                    </div>
                </div>

            </div> -->
        </div>
        <div class="listeningRight">
            <div class="right_actions">
                <div class="right_action lyrics_action">
                    <img src="assets/icons/lyrics_icon.svg" alt="Lyrics icon" class="right_action_img">
                </div>
                <div class="right_action attente_action">
                    <img src="assets/icons/attente_action.svg" alt="Attente icon" class="right_action_img">
                </div>
                <div class="right_action speakers_action">
                    <img src="assets/icons/speaker_action.svg" alt="speaker icon" class="right_action_img">
                </div>
                <div class="right_action sound_action">
                    <div class="sound_icon">
                        <img src="assets/icons/sound1_icon.svg" alt="Sound1 Icon">
                    </div>
                    <div class="sound_progress_bar_entire">
                        <div class="sound_progress_bar">
                            <div class="sound_progress_line">

                            </div>
                            <div class="sound_progress_round">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        
        document.querySelector('.component_main').addEventListener("scroll", () => {
            var scrollY = document.querySelector('.component_main').scrollTop
            var navbar = document.querySelector('.main_top');
            if(scrollY >= 30){
                navbar.style.backgroundColor = "#0E0E0E";
                navbar.style.width = "75.2%";
                navbar.style.paddingTop = "10px";
                navbar.style.paddingBottom = "10px";
                navbar.style.marginTop = "-5px";
                navbar.style.borderTopLeftRadius = "15px";
                navbar.style.borderTopRightRadius = "15px";
                navbar.style.marginRight = "35px";
                navbar.style.zIndex = "101";
            }else{
                navbar.style.backgroundColor = "transparent";
                navbar.style.paddingTop = "0px";
                navbar.style.marginTop = "13px";
                navbar.style.marginRight = "0px";
            }
        })

        // Sélectionner les éléments HTML pertinents
        const audioPlayer = document.querySelector('.listeningActions');
        const audioElement = new Audio('assets/songs/night_away.mp3');
        const progressBar = document.querySelector('.progress_line');
        const currentTime = document.querySelector('.current_time');
        const totalTime = document.querySelector('.total_time');
        const playButton = audioPlayer.querySelector('.action_play');

        // Mettre à jour la durée totale du son
        audioElement.addEventListener('loadedmetadata', () => {
        const duration = audioElement.duration;
        totalTime.textContent = formatTime(duration);
        });

        // Mettre à jour l'endroit où on en est et la largeur de la barre de progression
        audioElement.addEventListener('timeupdate', () => {
        const currentTimeValue = audioElement.currentTime;
        const duration = audioElement.duration;
        const progressPercent = (currentTimeValue / duration) * 100;

        currentTime.textContent = formatTime(currentTimeValue);
        progressBar.style.width = `${progressPercent}%`;
        });

        // Gérer le clic sur le bouton de lecture
        playButton.addEventListener('click', () => {
        if (audioElement.paused) {
            audioElement.play();
            playButton.classList.add('playing');
            document.querySelector("#listening_icon").src = "assets/icons/pause_icon.svg"
        } else {
            audioElement.pause();
            playButton.classList.remove('playing');
            document.querySelector("#listening_icon").src = "assets/icons/play_icon.svg"
        }
        });

        // Formatage du temps en format mm:ss
        function formatTime(time) {
        const minutes = Math.floor(time / 60);
        const seconds = Math.floor(time % 60);
        return `${minutes}:${seconds.toString().padStart(2, '0')}`;
        }


    </script>
    <script src="assets/js/script.js"></script>
</body>
</html>