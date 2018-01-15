@extends('layouts.app')

@section('content')

<h1>HOME PAGE</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisl purus, efficitur vel ultricies at, lobortis rutrum urna. Aliquam erat volutpat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer eu interdum nunc. Nam tincidunt velit vel lectus mattis, sed maximus lacus lobortis. Aenean eget pellentesque nisl. Aliquam erat volutpat. Duis id sem scelerisque, vestibulum ex sit amet, dictum tortor. Duis rutrum id elit sit amet vehicula. Nullam at magna ut velit varius ultricies commodo ac ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum elit augue, in faucibus mauris vestibulum sollicitudin. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus in elit tempus, iaculis dolor sed, tincidunt urna. In hac habitasse platea dictumst. Donec sed eros nulla.</p>

@endsection

@section('sidebar')
 @parent
<p>This is appended to the sidebar</p>
@endsection