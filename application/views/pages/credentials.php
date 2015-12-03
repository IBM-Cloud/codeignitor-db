<h2>Yikes!</h2>

<p>You haven't added the keys to your Twilio account yet.</p>
<p>This app won't work without them.</p>
<br/><br/>
<p>Enter them here and submit this form.</p>
<form method="post" id="theForm" action="/config/twilio">
    <div id="numbersContainer">
        <div>
            <div class="col-md-6">Twilio SID</div>
            <div class="col-md-6"><input name="sid" class="input" type="text" /></div>
        </div>
        <div>
            <div class="col-md-6">Twilio Secret</div>
            <div class="col-md-6"><input name="secret" class="input" type="text" /></div>
        </div>
        <div>
            <div class="col-md-6">Twilio Validated Phone Number</div>
            <div class="col-md-6"><input name="from_num" class="input" type="text" /></div>
        </div>
    </div>
    <br/><br/><input type="submit" />
</form>
<br/><br/>
<p>For a more permanent fix add them to the bottom of the <code>application/config/config.php</code> file and restage the app.</p>