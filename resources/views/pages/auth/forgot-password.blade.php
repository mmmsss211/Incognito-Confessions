<x-auth-layout title="Forgot password">
    <form method="POST" action="{{ route('password.email') }}" class="p-8">
        @csrf

        @if (session('status'))
            <p class="mb-8 text-sm text-emerald-400">{{ session('status') }}</p>
        @endif

        <!-- Email Address -->
        <div>
            <x-form.control label='Email or Username' name='login' />
        </div>

        <button type="submit"
            class="bg-primary hover:bg-primary/70 mt-14 w-max rounded py-3 px-4 font-medium text-white duration-150">
            Send Link
        </button>
    </form>
</x-auth-layout>
