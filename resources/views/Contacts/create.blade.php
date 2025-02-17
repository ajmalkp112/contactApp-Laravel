<x-layout>
  <div class="add-contact-container">
    <form action="{{route('contacts.store')}}" method='post' class="add-contact-form">
      @csrf

      <h2>Add New Contact</h2>
      <input type='text' name='name' placeholder='Enter Name' required><br>
      <input type='text' oninput="this.value=this.value.replace(/[^0-9\s+-]/g, '')" name='phone' placeholder='Enter Contact Number' required><br>

      <div class='form-buttons'>
        <a href="{{route('contacts.index')}}" class='contact-cancel-btn btn'>Cancel</a>
        <button type='submit' class="contact-add-btn btn">Add</button> 
      </div>
    
    </form>
  </div>
</x-layout>