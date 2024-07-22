
 <form method="POST">
       <div>
            <input type = 'date'  name='pickup_date' required>
         <br /><br />
        </div>
  </form>

    <script>
                var time = new Date();
                var localTimeStr = time.toLocaleString('en-US', { timeZone: 'Asia/Shanghai' });
                today = new Date(localTimeStr)
                tomorrow = new Date(today.setDate(today.getDate() + 1)).toISOString().split('T')[0];
                t = String(tomorrow)
                document.getElementsByName("pickup_date")[0].setAttribute('min', t);
    
	
				</script>