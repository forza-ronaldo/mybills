<html>
<head>
<style>
    h4
    {
        color: #0b509e;border-bottom: 1px solid; padding-bottom: 5px;padding-right: 20px;
    }
    last-child{
        border-bottom: none;
    }
    span
    {
        color: royalblue;
    }
</style>
</head>
<body >
<h2 style="color: #0b509e;text-align: center">الشركة السورية للاتصالات</h2>
<div style="border: 1px solid;text-align: right;margin-right: 20px">
      <ol dir="rtl" type="circle">
          <li><h4>  رقم الهاتف : <span>{{$bill->phone_number}}</span>       </h4></li>
     <li> <h4> رقم الدورة : <span>{{$bill->course_number}}</span>  </h4></li>
     <li> <h4>  الاسم : <span>{{$bill->name}}</span>   </h4></li>
     <li> <h4> تاريخ الاصدار : <span>{{$bill->relase_date}}</span>   </h4></li>
     <li> <h4>  تاريخ الاصدار القادم : <span>{{$bill->next_relase_date}}</span> </h4></li>
     <li> <h4> الاتصالت المحلية : <span>{{$bill->local_calls}}</span> </h4></li>
     <li> <h4> الاتصالات الدولية : <span>{{$bill->international_calls}}</span>   </h4></li>
     <li> <h4>  اشتراك الانترنت : <span>{{$bill->servise_adsl}}</span> </h4></li>
     <li> <h4>  قيمة الفاتورة : <span>{{$bill->amount_due_of_payment}}</span>  </h4></li>
         <li> <h4> المدينة : <span>{{$bill->city}}</span>   </h4></li>
         <li> <h4> المنطقة : <span>{{$bill->area}}</span>  </h4></li>
         <li> <h4 style=" border: none ;@isset($bill->receipt_id) border-bottom:1px solid; @endisset() ">  الشارع : <span>{{$bill->street}}</span>   </h4></li>
    @isset($bill->receipt_id)

        <li> <h4>  تاريخ الدفع :  <span>{{$bill->payment_date}}</span>  </h4></li>
        <li> <h4>  رقم ايصال الدفع : <span>{{$bill->receipt_id}}</span>   </h4></li>
        <li> <h4>  قيمة الفاتورة : <span>{{$receipt->value}}</span>    </h4></li>
        <li> <h4> تاريخ الانشاء : <span>{{$receipt->relase_date}}</span>    </h4></li>
        <li> <h4>  نوع الفاتورة : <span>{{$receipt->bill_type}}</span>   </h4></li>
        <li> <h4>  رقم الايصال : <span>{{$receipt->id}}</span>  </h4></li>
        <li> <h4> الرقم الخاص : <span>{{$receipt->number}}</span>    </h4></li>
        <li> <h4> رقم الدورة : <span>{{$receipt->course_number}}</span>   </h4></li>
        <li> <h4 style="border: none"> اسم الدافع : <span>{{$receipt->name_payment}}</span>    </h4></li>
    @endisset()
    </ol>
</div>
</body>
</html>
