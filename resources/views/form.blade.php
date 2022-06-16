<div id="win" class="window">
    <section class="form">
        <h2>Хочу прихистити</h2>
        <form action="/feedback" name="f" method="post">
            @csrf
            <label>
                <input type="text" placeholder="Ім'я" name="name" class="input">
            </label>
            <label>
                <input type="email" placeholder="Email" name="email" class="input">
            </label>
            <label>
                <input type="text" placeholder="Телефон" name="phone" class="input">
            </label>
            <input type="submit" value="Відправити" name="sab" class="button_reg">
        </form>
    </section>
</div>
