<Response>
    <Say voice="woman" language="fr" >
        Ne quittez pas, s'il vous plaît.
    </Say>
    <Dial>
        <Conference
            waitUrl="http://twimlets.com/holdmusic?Bucket=com.twilio.music.classical">
            my room
        </Conference>
    </Dial>
</Response>