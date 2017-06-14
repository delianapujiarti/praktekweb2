
                <!-- First Blog Post -->
                <?php foreach ($isi_buku as $dt): ?>
                <h2>
                    <a href="#"><?php echo $dt['judul'] ?></a>
                </h2>
                <p class="lead">
                    Tanggal <a href="index.php"><?php echo $dt['tanggal'] ?></a>
                </p>
                <p></i><?php echo $dt['isi'] ?></p>
                <hr>
                <a class="btn btn-primary" href="#">Read More <i class="fa fa-angle-right"></i></a>

                <hr>

                <?php endforeach ?>
                
                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

