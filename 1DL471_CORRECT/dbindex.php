<html>

<head>

</head>

<body>
    <h1>Movies page</h1>

<form action="show_movie.php" method="POST">
    <h3>Search for movies</h3>
    <input type="text" name="search"><br>
    <input type="submit" value="Search">
</form>

<form action="retrieve_from_db.php" method="POST"> 
    <input type="submit" value="See all movies"> 
</form>

    <h3>Add a movie to the database</h3>
<!-- Start of input methods -->
<form action="add_movie.php" method="POST">
    <!-- Textbox for movie name and telease year -->
    Please add a movie title:<br>
    <input type="text" name="mname"> <br>
    Please enter the release year:<br>
    <input type="text" name="myear"> <br>
    <!-- Drop down list for movie genre -->
    Please select the genre:<br>
    <select name="movie_genre"> 
        <option value='0' selected>Choose one</option>
        <option value='Action/Adventure'>Action/Adventure</option>
        <option value='Comedy'>Comedy</option>
        <option value='Drama'>Drama</option>
        <option value='Fantasy/Sci-Fi'>Fantasy/Sci-Fi</option>
    </select><br>
    <!-- Number input for the rating and limits -->
    Please enter a rating (1-5):<br>
    <input type="text" name="mrating" min='1' max='5' step='0.5'> <br>
    <!-- Submit button -->
    <input type="submit" value="Add Movie">
</form>

</body>
</html>
