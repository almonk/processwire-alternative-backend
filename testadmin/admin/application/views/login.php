<? $this->load->view('header') ?>

    <?=form_open('login/send', array('class'=>'well form-search'))?>
        <input type="text" class="input-small" name="username" placeholder="Username">
        <input type="password" class="input-small" name="password" placeholder="Password">
        <button type="submit" class="btn">&rarr;</button>
    </form>
    
<? $this->load->view('footer') ?>