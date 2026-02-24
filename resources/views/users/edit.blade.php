@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">Edit User</h1>
        <a href="{{ route('admin.users.index') }}" class="text-blue-600 hover:text-blue-800">
            &larr; Back to Users
        </a>
    </div>

    <div id="successMessage" class="hidden bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"></div>

    <form id="editUserForm" class="bg-white rounded-lg shadow p-6 space-y-4">
        @csrf
        @method('PUT')

        <input type="hidden" id="userId" value="{{ $userId }}">

        <div>
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
            <input type="text" id="name" name="name" required
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            <p id="nameError" class="text-red-500 text-xs mt-1 hidden"></p>
        </div>

        <div>
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
            <input type="email" id="email" name="email" required
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            <p id="emailError" class="text-red-500 text-xs mt-1 hidden"></p>
        </div>

        <div>
            <label for="role" class="block text-gray-700 text-sm font-bold mb-2">Role</label>
            <select id="role" name="role" required
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <p id="roleError" class="text-red-500 text-xs mt-1 hidden"></p>
        </div>

        <div>
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password (leave blank to keep current)</label>
            <input type="password" id="password" name="password"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            <p id="passwordError" class="text-red-500 text-xs mt-1 hidden"></p>
        </div>

        <div>
            <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="flex justify-end">
            <button type="submit" id="submitBtn"
                class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700">
                Update User
            </button>
        </div>
    </form>
</div>
@endsection

@vite(['resources/js/pages/form.js'])
