<nav class="navbar navbar-dark bg-primary">
	<div class="d-flex">
		<ul class="nav">
			<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="view_paintings.php">Paintings</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="view_artists.php">Artists</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="add_painting.php">Add Paintings</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="add_artist.php">Add Artists</a>
			</li>
		</ul>
			<!-- Filter by Style -->		
			<form class="p2" action="filter_paintings.php" method="post">
				<label id="nav-item" for="style">Filter by Style</label>
				<select name="style" id="style">
					<option value="Impressionism">Impressionism</option>
					<option value="Mannerism">Mannerism</option>
					<option value="Still-life">Still-life</option>
					<option value="Portrait">Portrait</option>
					<option value="Realism">Realism</option>
					<option value="Cubism">Cubism</option>
					<option value="Surrealism">Surrealism</option>
				</select>
				<button type="submit">Filter</button>
			</form>
		
			<!-- Filter by Artist -->
			<form class="p2" action="filter_paintings.php" method="post">
				<label id="nav-item" for="artist">Filter by Artist</label>
				<select name="artist" id="artist">
					<option value="August Renoir">August Renoir</option>
					<option value="Michelangelo">Michelangelo</option>
					<option value="Vincent Van Gogh">Vincent Van Gogh</option>
					<option value="Leonardo da Vinci">Leonardo da Vinci</option>
					<option value="Claude Monet">Claude Monet</option>
					<option value="Pablo Picasso">Pablo Picasso</option>
					<option value="Salvador Dali">Salvador Dali</option>
					<option value="Paul Cezanne">Paul Cezanne</option>
				</select>
				<button type="submit">Filter</button>
			</form>
		
			<!-- Filter by Period -->
			<form class="p2" action="filter_artists.php" method="post">
				<label id="nav-item" for="lifespan">Filter by Period</label>
				<select name="lifespan" id="lifespan">
					<option value="1400">1400s</option>
					<option value="1600">1600s</option>
					<option value="1800">1800s</option>
					<option value="1900">1900s</option>
				</select>
				<button type="submit">Filter</button>
			</form>
		
			<!-- Filter by Nationality -->
			<form class="p2" action="filter_artists.php" method="post">
				<label id="nav-item" for="nationality">Filter by Nationality</label>
				<select name="nationality" id="nationality">
					<option value="French">French</option>
					<option value="Italian">Italian</option>
					<option value="Dutch">Dutch</option>
					<option value="Spanish">Spanish</option>
				</select>
				<button type="submit">Filter</button>
			</form>	
			
			<!-- Search -->
			<form class="p-2" role="search" id="searchForm" method="POST">
				<input class="form-control" name="search_text" id="search_text" type="text" placeholder="Search" aria-label="Search">
				<button type="button" id="searchArtistButton">Artists</button>
				<button type="button" id="searchPaintingButton">Paintings</button>
			</form>
		</div>
			
			<!-- Checks which button was clicked, executes search -->
			<script>
				document.getElementById("searchArtistButton").addEventListener("click", function() {
				document.getElementById("searchForm").action = "search_artist.php";
				document.getElementById("searchForm").submit();
				});

				document.getElementById("searchPaintingButton").addEventListener("click", function() {
				document.getElementById("searchForm").action = "search_painting.php";
				document.getElementById("searchForm").submit();
				}); 
			</script>
		
	</div>
</nav>
</nav>