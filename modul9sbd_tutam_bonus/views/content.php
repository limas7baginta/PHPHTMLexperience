		<div class="row">
			<div class="forms large-12 columns">
				<h5><?php 
					/**
						todo:
						Implementasikan variabel Session di sini.
						Jika !isset($_SESSION['..']) (Tidak ada variabel session), berarti belum login, berati link ADD NEW ENTRY TIDAK DITAMPILKAN.
						jika sebaliknya berarti telah login. Tampilkan Semunya seperti biasa (case study).
						Gunakan if-else.
					*/ 
					?>
					<span class="searchlink"><a>Search</a></span>
				</h5>
			</div>
			<div class="large-12 columns" style="display:none" id="newentry">
				<fieldset>
					<legend>New Entry</legend>
					<form action="entry.php" method="post">
						Nama
						<input required type="text" name="nama">
						Angkatan
						<input required type="text" name="ang">
						Fakultas
						<input required type="text" name="fak">
						Jurusan
						<input required type="text" name="jur">
						NPM
						<input required type="text" name="npm">
						<input type="submit" class="button small" value="Submit">
					</form>
				</fieldset>
			</div>
			<div class="large-12 columns" style="display:none" id="newsearch">
				<form action="search.php" method="post">
					Keyword:
					<input type="text" name="nama">
					<input type="submit" class="button small" value="Search">
				</form>
			</div>
		</div>
		<div class="row table">
			<div class="large-12 columns">
				<fieldset>
					<legend><?php echo $legend;?></legend>
					<table id="userdata" width="100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Angkatan</th>
								<th>Fakultas</th>
								<th>Jurusan</th>
								<th>NPM</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							$x = 1;
							while($row = mysqli_fetch_row($sql))
							{
								echo "<tr><td>$x</td>";
								foreach($row as $key=>$value)
								{
									echo"<td>$value</td>";
								}
								/**
									todo:
									Implementasikan variabel Session di sini.
									Jika !isset($_SESSION['..']) (Tidak ada variabel session), berarti belum login, berati link EDIT DAN DELETE TIDAK DITAMPILKAN.
									jika sebaliknya berarti telah login. Tampilkan Semunya seperti biasa (case study).
									Gunakan if-else.
								*/ 
								if(!isset($_SESSION['user']))
								{
									echo "<td><a href=\"view.php?npm=$value\">View</a></td>
								</tr>";
								}
								else
								{
									echo "<td><a href=\"view.php?npm=$value\">View</a> | <a onclick=\"edit($value)\">Edit</a> | <a href=\"delete.php?npm=$value\">Delete</a></td>
								</tr>";									
								}

							$x++;
							}
						?>
						</tbody>	
					</table>
				</fieldset>
				<a class="collapse">Collapse All</a> | <a href="index.php">Back to Home Page</a>
			</div>
		</div>

		<div class="row">
			<div class="large-12 columns" style="display:none" id="edit">
				<fieldset>
					<legend>Edit Form</legend>
					<form action="edit.php" method="post" class="editform">
						Nama
						<input required type="text" name="nama">
						Angkatan
						<input required type="text" name="ang">
						Fakultas
						<input required type="text" name="fak">
						Jurusan
						<input required type="text" name="jur">
						NPM
						<input readonly type="text" name="npm">
						<input type="submit" class="button small" value="Submit">
					</form>
				</fieldset>
			</div>
		</div>
	</div>
</body>