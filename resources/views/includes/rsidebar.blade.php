   

 


<h4 class="background: #eae9db;"><u>Attendance Summary - {{ $attendancecount }}</u></h4>
 
@if(!$attendancesummary->isEmpty())

    @foreach ($attendancesummary as $summaryattendance)      
        <p class="small">{{  ($summaryattendance->mn) }} / {{  ($summaryattendance->yr) }} - {{  ($summaryattendance->count_row) }}</p>
    @endforeach
@else
   <p>No Attendance</p>

@endif
 