<x-guest-layout>
 
  <section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        {{-- <div class="col-md-7 col-xs-12">
          <div class="continer centerIt">
            <div>
              <h4>Take <em>any online course</em> and win $326 for your next class</h4>
              <div class="counter">

                <div class="days">
                  <div class="value">00</div>
                  <span>Days</span>
                </div>

                <div class="hours">
                  <div class="value">00</div>
                  <span>Hours</span>
                </div>

                <div class="minutes">
                  <div class="value">00</div>
                  <span>Minutes</span>
                </div>

                <div class="seconds">
                  <div class="value">00</div>
                  <span>Seconds</span>
                </div>

              </div>
            </div>
          </div>
        </div> --}}
        <div class="col-md-6">
          <div class="right-content">
            <div class="top-content">
              <h6>Register your free account and <em>get immediate</em> access to online chat with colleagues</h6>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
        
                <!-- Name -->
                <div>
                    <x-input-label class="label" for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
        
                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label class="label" for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                
                <!-- Phone -->
                <div class="mt-4">
                    <x-input-label class="label" for="phone" :value="__('Phone')" />
                    <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                </div>
                <!-- Matric No -->
                <div class="mt-4">
                    <x-input-label class="label" for="matno" :value="__('Matric No')" />
                    <x-text-input id="matno" class="block mt-1 w-full" type="text" name="matno" :value="old('matno')" required />
                    <x-input-error :messages="$errors->get('matno')" class="mt-2" />
                </div>
                <!-- Department -->
                <div class="mt-4">
                    <x-input-label class="label" for="dept" :value="__('Department')" />
                        <select class="block mydept mt-1 w-full bg-100" name="dept" id="">
                            <option value="" selected disabled>Department</option>
                            <option value="computer">Computer Science</option>
                            <option value="EducationMGT">Education Management</option>
                            <option value="artSSE">Arts and Social Sci</option>
                            <option value="scienceEdu">Science Education</option>
                            <option value="law">Law</option>
                            <option value="pHealth">Physical Health</option>
                            <option value="medLab">Medical Laboratory</option>
                            <option value="accounting">Accounting</option>
                            <option value="bankingF">Banking and Finance</option>
                            <option value="bizAdmin">Business Administration</option>
                            <option value="economics">Economics</option>
                            <option value="biologySci">Biology Science</option>
                            <option value="chemGeo">Chemistry Geography</option>
                            <option value="physics">Physics</option>
                            <option value="history">History</option>
                            <option value="islam">Islamic Studies</option>
                            <option value="language">Language</option>
                            <option value="massComm">Mass Communications</option>
                            <option value="pubAdmin">Public Administration</option>
                            <option value="sociology">Sociology</option>
                            <option value="agricultureword">Agriculture</option>
                        </select>
                    <x-input-error :messages="$errors->get('dept')" class="mt-2" />
                </div>
                
                <!-- Level -->
                <div class="mt-4">
                    <x-input-label class="label" for="dept" :value="__('Level')" />
                        <select class="block mydept mt-1 w-full bg-100" name="lvl" id="">
                            <option value="" selected disabled>Level</option>
                            <option value="100">100 lvl</option>
                            <option value="200">200 lvl</option>
                            <option value="300">300 lvl</option>
                            <option value="400">400 lvl</option>
                        </select>
                    <x-input-error :messages="$errors->get('lvl')" class="mt-2" />
                </div>
                <!-- Sex -->
                <div class="mt-4">
                    <x-input-label class="label" for="sex" :value="__('Gender')" />
                        <select class="block mydept mt-1 w-full bg-100" name="sex" id="">
                            <option value="" selected disabled>Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    <x-input-error :messages="$errors->get('sex')" class="mt-2" />
                </div>
        
                <!-- Password -->
                <div class="mt-4">
                    <x-input-label class="label" for="password" :value="__('Password')" />
        
                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
        
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
        
                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label class="label" for="password_confirmation" :value="__('Confirm Password')" />
        
                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
        
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
        
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-white-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
        
                    <x-primary-button class="ml-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-guest-layout>
