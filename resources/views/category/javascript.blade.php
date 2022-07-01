@extends('layouts.halaman.category')

@section('konten')
        <div class="container2">
            <svg viewBox="0 0 156 175" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.119568 0.411453H155.976V174.556H0.119568V0.411453Z" fill="#F7DF1E"/>
            <path d="M41.1076 145.941L53.035 137.874C55.3388 142.434 57.4294 146.292 62.4515 146.292C67.2663 146.292 70.2985 144.188 70.2985 136.008V80.36H84.9443V136.233C84.9443 153.181 76.0609 160.897 63.0792 160.897C51.365 160.897 44.5662 154.114 41.1135 145.935L41.1076 145.941ZM92.8979 144.181L104.819 136.465C107.958 142.196 112.039 146.391 119.258 146.391C125.328 146.391 129.196 143.003 129.196 138.324C129.196 132.713 125.222 130.727 118.535 127.452L114.875 125.698C104.31 120.675 97.2981 114.362 97.2981 101.034C97.2981 88.7578 105.666 79.407 118.743 79.407C128.052 79.407 134.733 83.0335 139.559 92.4968L128.159 100.683C125.648 95.6535 122.93 93.6682 118.743 93.6682C114.455 93.6682 111.731 96.7057 111.731 100.683C111.731 105.593 114.449 107.579 120.727 110.609L124.387 112.363C136.823 118.319 143.847 124.401 143.847 138.08C143.847 152.811 133.489 160.878 119.566 160.878C105.945 160.878 97.1797 153.598 92.9156 144.161" fill="black"/>
            </svg>
        </div>
    </div>
    <!-- Akhir Laanding Page -->

        <!-- Breadcrumb -->
        <ul class="breadcrumb">
            <li><a href="/"> <span style="color: black;" class="icon-home1"></span> Home </a></li>
            <li> Javascript </li>
        </ul>

    <!-- Konten -->
    <div class="container">
      <div class="Konten">
        <?php
        include "../koneksi.php";
        
        $page = (isset($_GET['page']))? (int) $_GET['page'] : 1;
        
        $limit = 12;
        $limitStart = ($page - 1) * $limit;    
        $SqlQuery = mysqli_query($con, "SELECT * FROM javascript LIMIT ".$limitStart.",".$limit);
        $no = $limitStart + 1;
        
        while($row = mysqli_fetch_array($SqlQuery)){ 
        ?>
            
                <div class="card">
                    <a href="../Tutorial/Javascript/<?php echo $row['berkas_produk']; ?>"> 
                    <div class="KontenCard">
                        <img alt="Tutorial Javascript" class="lazy" src="../blank.jpg" data-original="../GambarTutorial/Javascript/<?php echo $row['gambar_produk']; ?>"> 
                    </a>     
                        <p> <a id="Tag" href="javascript.php"> Javascript </a> </p> <br>
                        <a href="../Tutorial/Javascript/<?php echo $row['berkas_produk']; ?>">
                            <p> <?php echo $row['nama_produk']; ?> </p>
                        </a> 
                    </div>
                </div>
            
        <?php           
        }
        ?>

        
        </div>
        <!-- Pagination -->
        <div class="Pagination">
            <!-- Back -->
            <div class="Back">
                <?php

                if($page == 1){ 
                ?>        
                    <a class="pure-button" href="#">
                        <button> &laquo; </button> 
                    </a>
                <?php
                }
                else{ 
                $LinkPrev = ($page > 1)? $page - 1 : 1;
                ?>
                    <a href="javascript.php?page=<?php echo $LinkPrev; ?>">
                        <button> &laquo; </button> 
                    </a>
                <?php
                }
                ?>
            </div>

            <?php
            $SqlQuery = mysqli_query($con, "SELECT * FROM javascript");        
            
            $JumlahData = mysqli_num_rows($SqlQuery);
            
            $jumlahPage = ceil($JumlahData / $limit); 
            
            $jumlahNumber = 1; 

            $startNumber = ($page > $jumlahNumber)? $page - $jumlahNumber : 1; 
            
            $endNumber = ($page < ($jumlahPage - $jumlahNumber))? $page + $jumlahNumber : $jumlahPage; 
            
            for($i = $startNumber; $i <= $endNumber; $i++){
                $linkActive = ($page == $i)? ' class="active"' : '';
            ?>
                <a href="javascript.php?page=<?php echo $i; ?>">
                    <span <?php echo $linkActive; ?>><?php echo $i; ?></span>
                </a>
            <?php
                }
            ?>
            
            <!-- Next -->
            <div class="Next">
            <?php       
                if($page == $jumlahPage){ 
            ?>
                <a class="pure-button" href="#">
                    <button> &raquo; </button>
                </a>
            <?php
            }
            else{
                $linkNext = ($page < $jumlahPage)? $page + 1 : $jumlahPage;
            ?>
                <a href="javascript.php?page=<?php echo $linkNext; ?>">
                    <button> &raquo; </button>
                </a>
            <?php
                }
            ?>
            </div>
        </div>
        <!-- Akhir Pagination -->
    </div>
    <!-- Akhir Konten -->
@endsection