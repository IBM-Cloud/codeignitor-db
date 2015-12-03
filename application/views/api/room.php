<Response>
    <Say voice="woman" language="en" >
        Please hold the line, your conference will begin shortly.
    </Say>
    <Dial>
        <Conference
            waitUrl="http://twimlets.com/holdmusic?Bucket=com.twilio.music.classical">
            my room
        </Conference>
    </Dial>
</Response>