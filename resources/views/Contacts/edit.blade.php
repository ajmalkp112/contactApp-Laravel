<x-layout>
  <div class="add-contact-container">
    <form action="{{route('contacts.update', $contact)}}" method='post' class="add-contact-form">
      @csrf

      @method('PUT')

      <h2>Edit Contact</h2>
      <input type='text' name='name' placeholder='Enter Name' value="{{$contact->name}}" required><br>
      <input type='text' oninput="this.value=this.value.replace(/[^0-9\s+-]/g, '')" name='phone' placeholder='Enter Contact Number' value="{{$contact->phone}}" required><br>

      <div class='form-buttons'>
        <a href="{{route('contacts.index')}}" class='contact-cancel-btn btn'>Cancel</a>
        <button type='submit' class="contact-add-btn btn">Update</button> 
      </div>
    
    </form>
  </div>
</x-layout>