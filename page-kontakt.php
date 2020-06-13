<?php get_header();?>
    <div class='thumbnail' >
        <img id='map' src='<?php echo get_template_directory_uri()."/images/map.png";?>'>
    </div>
    <div class='contact'>
        <div class='container'>
            <div class='row'>
                <div class='col-sm contactForm'>
                    <h2>Izpolni obrazec</h2>
                    <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ime*">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email*">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder=Sporočilo*></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Pošlji</button>
                    </form>
                </div>
                <div class='col-sm contactInfo'>
                        <h2>Kontaktni podatki</h2>
                        <span class="bolder">Naslov</span><br>Celestrina 2a, 2229 Malečnik<br>
                        <span class="bolder">Telefon</span><br><a href="tel:+38624730000">+3862473 0000</a><br>
                        <span class="bolder">Email</span><br><a href="mailto:pgd.malecnik@triera.net">pgd.malecnik@triera.net</a><br>
                        <span class="bolder">Na voljo</span><br>24/7<br>
                        <span class="bolder">Pridruži se nam</span><br><a href="index.php/pridruzi-se">Pridruži se</a><br>
                </div>
            </div>
        </div>
    </div>


<?php get_footer();?>