<nav class="nati" id="nati">
    <ul>
        <li>
            <a href="{{ route('Comptes') }}">
                <span>
                    <i class="bi bi-credit-card"></i>
                    <span>{{ $version[7] }}</span>
                </span>
                <p>{{ $version[8] }}</p>
            </a>
        </li>
        <li>
            <a href="{{ route('Loans') }}">
                <span>
                    <i class="bi bi-currency-euro"></i>
                    <span>{{ $version[9] }}</span>
                </span>
                <p>{{ $version[10] }}</p>
            </a>
        </li>

        <li>
            <a href="{{ route('Assurance') }}">
                <span>
                    <i class="bi bi-umbrella-fill"></i>
                    <span>{{ $version[11] }}</span>
                </span>
                <p>{{ $version[12] }}</p>
            </a>
        </li>
        <li>
            <a href="{{ route('Savings') }}">
                <span>
                    <i class="bi bi-wallet2"></i>
                    <span>{{ $version[22] }}</span>
                </span>
                <p>{{ $version[13] }}</p>
            </a>
        </li>
        <li>
            <a href="{{ route('Investment') }}">
                <span>
                    <i class="bi bi-graph-up-arrow"></i>
                    <span>{{ $version[14] }}</span>
                </span>
                <p>{{ $version[15] }}</p>
            </a>
        </li>
        <li>
            <a href="{{ route('Contact') }}">
                <span>
                    <i class="bi bi-chat-dots-fill"></i>
                    <span>{{ $version[16] }}</span>
                </span>
                <p>{{ $version[17] }}</p>
            </a>
        </li>

        <li>
            <a href="{{ route('Login') }}">
                <span>
                    <i class="bi bi-qr-code"></i>
                    <span>{{ $version[20] }}</span>
                </span>
                <p>{{ $version[21] }}</p>
            </a>
        </li>
    </ul>
</nav>
