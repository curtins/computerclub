 
<h4 class="background: #eae9db;"><u>Attendance</u></h4>
 
@if(!$attendance->isEmpty())

    @foreach ($attendance as $attendances)      
        <p class="small">{{ Carbon\Carbon::parse($attendances->DATE_ATTENDED)->format('m-d-Y') }}</p>
    @endforeach
@else
   <p>No Attendance</p>

@endif

<br>

<h4><u>Transactions</u></h4>
 
@if(!$transaction->isEmpty())

    @foreach ($transaction as $transactions)
        <p class="small"  >{{ $transactions->TRAN_TYPE}} - {{ Carbon\Carbon::parse($transactions->TRAN_DATE)->format('m-d-Y') }} - {{ number_format($transactions->TRAN_AMT,2) }}</p>
    @endforeach
@else
   <p>No Transactions</p>
@endif
  


   
   
 











