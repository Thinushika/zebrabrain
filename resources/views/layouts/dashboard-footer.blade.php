
<div class="d-flex flex-column flex-lg-row footerSec py-3 px-0">
    <div class="col-12 col-lg-6 d-flex flex-column flex-lg-row">
        <div class="col-12 col-lg-6 d-flex justify-content-center">
            <i class="bi bi-envelope px-2"></i>
            zebrabrain@gmail.com
        </div>
        <div class="col-12 col-lg-6 d-flex justify-content-center">
            <i class="bi bi-geo-alt px-2"></i>
            Address
        </div>
    </div>
    <div class="col-12 col-lg-6 d-flex justify-content-end socialIcons pe-3">
        <i class="bi bi-facebook px-2"></i>
        <i class="bi bi-twitter px-2"></i>        
        <i class="bi bi-google px-2"></i>        
        <i class="bi bi-instagram px-2"></i>    
    </div>
</div>

</div>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"
    integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<!-- JS for jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- JS for full calender -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>


<script>
    $(document).ready(function() {
        $('#calendarDiv').fullCalendar({
        defaultView: 'month',
        events: [
          {
            title: 'sample text',
            start: '2024-02-01'
            
          },
          {
            title: 'sample text',
            start: '2024-02-25'
          },
          {
            title: 'sample text',
            start: '2024-02-28'
          }
          ] 
        });
    });


  // Get current date
const currentDate = new Date();
let currentMonth = currentDate.getMonth();
let currentYear = currentDate.getFullYear();
let today = currentDate.getDate();

// Function to display the current month
function displayCurrentMonth() {
    const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    document.getElementById('month-year').textContent = months[currentMonth] + ' ' + currentYear;

    const firstDayOfMonth = new Date(currentYear, currentMonth, 1);
    const lastDayOfMonth = new Date(currentYear, currentMonth + 1, 0);
    const daysInMonth = lastDayOfMonth.getDate();

    const calendarBody = document.getElementById('calendar-body');
    calendarBody.innerHTML = '';

    let date = 1;
    for (let i = 0; i < 6; i++) {
        const row = document.createElement('tr');
        for (let j = 0; j < 7; j++) {
            const cell = document.createElement('td');
            if (i === 0 && j < firstDayOfMonth.getDay()) {
                row.appendChild(cell);
            } else if (date > daysInMonth) {
                break;
            } else {
                cell.textContent = date;
                row.appendChild(cell);
                if (date === today) {
                    cell.classList.add('today'); // Add class for today's date
                }
                date++;
            }
        }
        calendarBody.appendChild(row);
    }
}

// Function to navigate to the previous month
function previousMonth() {
    currentMonth--;
    if (currentMonth < 0) {
        currentMonth = 11;
        currentYear--;
    }
    displayCurrentMonth();
}

// Function to navigate to the next month
function nextMonth() {
    currentMonth++;
    if (currentMonth > 11) {
        currentMonth = 0;
        currentYear++;
    }
    displayCurrentMonth();
}

// Display current month when the page loads
displayCurrentMonth();



function ConsultationButtonClicked(button) {
    button.classList.add('active');
}

</script>
</body>

</html>