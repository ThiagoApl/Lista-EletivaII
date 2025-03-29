<ul style="list-style: none; padding: 0;">
    

    @for ($i = 1; $i <= 15; $i++)
        <li style="display: inline; margin-right: 10px;">
            <a href="/ex{{ $i }}">Exercício {{ $i }}</a>
        </li>
    @endfor
</ul>
