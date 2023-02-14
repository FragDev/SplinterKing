@props([
    'coupon',
    'productImage' => [
        'steakhouse' => 'https://burgerkingfrance.twic.pics/img/products/e/77/e7752470-c368-44a6-88e2-b58f16f75d14_?twic=v1/contain=250x250',
        'whopper' => 'https://burgerkingfrance.twic.pics/img/products/4/56/4565c2c0-baec-48d9-8493-db196b9b3250_?twic=v1/contain=250x250',
        'wrap' => 'https://burgerkingfrance.twic.pics/img/products/a/e9/ae9cc9d5-2fca-4262-94d9-bca0aab66c24_?twic=v1/contain=250x250',
        'king bio fruit' => 'https://burgerkingfrance.twic.pics/img/products/6/a8/6a8488e2-0bb5-449b-a8e8-0f8150cef291_?twic=v1/contain=250x250',
    ],
])

@if (Str::contains(Str::lower($coupon), 'steakhouse'))
    <img class="w-32 h-32 mx-auto" src="{{ $productImage['steakhouse'] }}" alt="steakhouse">
@elseif (Str::contains(Str::lower($coupon), 'whopper'))
    <img class="w-32 h-32 mx-auto" src="{{ $productImage['whopper'] }}" alt="whopper">
@elseif (Str::contains(Str::lower($coupon), 'wrap'))
    <img class="w-32 h-32 mx-auto" src="{{ $productImage['wrap'] }}" alt="wrap">
@elseif (Str::contains(Str::lower($coupon), 'king bio fruit'))
    <img class="w-32 h-32 mx-auto" src="{{ $productImage['king bio fruit'] }}" alt="king bio fruit">
@else
    <svg class="w-32 h-32 mx-auto" viewBox="0 0 80 80" preserveAspectRatio="none">
        <g fill-rule="evenodd">
            <path
                d="M39.964.244c22.071 0 39.964 17.657 39.964 39.439 0 21.78-17.893 39.438-39.964 39.438C17.892 79.12 0 61.464 0 39.683 0 17.9 17.892.244 39.964.244"
                fill="#F5EBDC"></path>
            <path
                d="M67.092 50.602C62.036 62.066 52.221 70.14 39.432 70.24c-9.32.1-17.549-3.09-23.497-8.673l-3.57 1.495V57.48C8.5 52.196 6.22 45.418 6.22 37.842c0-19.539 14.871-34.89 35.592-34.89 3.371 0 6.444.498 8.725 1.096-3.57-1.097-7.139-1.794-11.005-1.794-22.307 0-37.277 18.143-37.277 36.884 0 20.435 15.961 37.482 36.781 37.482 19.927 0 30.735-14.155 34.204-22.629l-6.147-3.39z"
                fill="#254195"></path>
            <path
                d="M48.512 26.767c0 .687-.296 1.571-.889 2.062-.591.59-1.577 1.179-3.353 1.473-3.256.59-5.918-1.178-5.918-5.303 0-3.928 2.367-7.267 7.003-7.463 2.17-.098 3.157.59 3.057 1.768 0 1.08-.789 1.669-2.07 1.473-.494-.099-1.184-.197-1.875 0-1.48.392-2.564 1.669-2.564 4.026 0 1.768.69 2.651 1.874 2.651.887 0 1.676-.294 1.676-.883v-1.375s-.295.098-.69.196c-.69.098-1.085-.294-1.085-.884v-1.375l4.932-1.08-.098 4.714zm8.778.393V15.375s3.452-.59 4.34-.687c2.467-.295 4.144 1.08 4.144 3.044 0 1.67-1.086 2.75-1.973 3.34 0 0 1.677 1.865 2.17 2.356.591.687.591 1.866-.297 2.357-.887.59-1.775.295-2.268-.295l-2.86-3.339V25c0 .884-.493 1.473-1.382 1.67l-1.874.491zm3.256-6.776s1.973-.688 1.873-2.259c0-1.277-1.282-1.08-1.873-.884v3.143zM32.532 28.83v3.241c0 .884-.592 1.474-1.38 1.768-.593.197-1.974.687-1.974.687V22.151s2.762-.982 4.44-1.374c2.564-.59 4.34.59 4.24 2.553 0 1.964-1.085 3.142-2.071 3.928l2.17 2.062c.69.59.69 1.768 0 2.455-.394.394-1.578.885-2.564-.097l-2.86-2.849zm0-1.866s1.973-.982 1.973-2.553c0-1.375-1.282-1.08-1.973-.786v3.34zm16.769 1.866V16.85a155.54 155.54 0 0 1 7.102-1.474v1.375c0 .688-.296 1.277-.987 1.375-.986.196-2.762.59-2.762.59v1.865l3.453-.785v1.374c0 .786-.395 1.18-.986 1.277l-2.467.491v2.357l3.946-.884v1.375c0 .884-.493 1.375-1.184 1.571-2.17.59-6.115 1.473-6.115 1.473zM28.29 30.99c0 3.634-1.677 5.009-4.242 5.794-2.86.884-4.735-.491-4.735-3.24V25.49s.592-.294 1.677-.589c.888-.294 1.677 0 1.677 1.179v6.677c0 .787.394 1.278 1.184 1.18.986-.295 1.085-1.277 1.183-2.063v-8.151s.888-.295 1.579-.59c.887-.294 1.677 0 1.677 1.18v6.677zm-9.174 4.223c0 2.553-1.775 3.83-4.143 4.812l-4.833 2.062v-13.16s3.058-1.276 4.044-1.57c2.86-.983 4.537.196 4.537 2.061 0 1.278-.493 2.357-1.677 3.242.987.294 1.973 1.178 2.072 2.553zm-5.72-2.456l.59-.294c.691-.393 1.283-.982 1.283-1.866 0-.982-.789-1.179-1.874-.687v2.847zm2.169 2.849c0-.982-.789-1.571-2.17-.884v3.24s.395-.196.789-.294c.79-.393 1.38-1.08 1.38-2.062zm10.85 2.455c-1.48-.688-2.86.098-3.354.884L18.427 46.9v-6.384l-5.524 2.259v18.07l3.847-1.67s.789-.196 1.184-.982c.394-.687.394-1.767.394-1.767v-5.697l4.34 4.616c.987.982 2.664 1.473 4.242.294 1.38-1.08 1.183-3.044.394-3.928l-3.945-3.928s3.452-5.5 4.043-6.383c.79-1.178.396-2.652-.986-3.339zm8.286-3.536s-1.677.492-2.959.983c-1.776.589-2.762 1.669-2.762 4.32v15.026s1.578-.491 2.959-1.08c2.072-.786 2.762-1.767 2.762-3.928v-15.32zm1.677 17.677s2.367-.785 2.564-.883c1.875-.688 2.565-1.768 2.565-3.732v-6.285l5.524 6.285c.887.884 1.973.982 3.058.687 1.085-.294 1.972-1.277 1.972-2.651V29.91s-1.38.295-2.564.589c-1.381.393-2.367 1.276-2.367 3.536v5.4s-3.058-3.83-5.13-5.891c-1.085-1.08-2.86-.393-2.86-.393l-2.663.785-.1 18.266zm25.054-6.58c2.96-.294 4.932-1.472 6.017-2.553.987-.982 1.282-2.356 1.282-3.338v-6.187l-7.693 1.669v1.768c0 1.178.591 1.866 1.874 1.571.394-.098.986-.295.986-.295v1.474s.1.785-1.874 1.178c-2.565.393-3.65-1.178-3.749-3.928.1-2.946 1.777-4.616 3.75-5.107 2.268-.491 3.55 0 4.339.098 2.565.393 3.255-3.437.986-4.32-1.677-.689-3.945-.787-6.116-.394-2.86.59-8.384 2.947-8.384 10.606 0 6.286 4.538 8.25 8.582 7.759z"
                fill="#E22B2E"></path>
            <path
                d="M64.014 47.661c-.194-.199-.586-.199-.977-.1-10.16 2.393-27.065 7.676-36.835 11.962-.391.2-.586.3-.782.599-.195.498.293.997.293.997 1.955 2.591 10.846 5.781 20.421 3.389C60.79 60.919 63.82 50.352 64.21 48.857c0-.398.098-.897-.196-1.196m-3.321 4.186c-2.346 4.985-6.45 8.374-10.846 10.069 4.885-2.891 7.719-6.978 8.989-10.567.587-1.694 2.54-.897 1.857.498m-3.127-40.272S54.83 6.889 45.255 5.793c-5.08-.598-12.116.498-17.001 3.19-8.794 4.884-10.162 12.86-10.162 12.86-.097.199-.097.796.098 1.096.195.299.489.299.88.1 3.126-1.097 12.506-4.287 18.368-5.782 8.403-2.293 15.242-3.688 19.64-4.387.292-.1.585-.2.683-.498.196-.398-.195-.797-.195-.797M22.39 19.55c-.097.997-1.368.897-1.27-.1.196-2.393 3.81-8.174 9.185-10.667-3.322 2.193-6.84 6.38-7.915 10.767m25.697-6.48c1.173-.3 1.954-1.196 1.954-2.193 0-1.595-3.517-3.888-9.282-4.287 5.667-.498 11.823 2.093 11.823 4.287 0 1.295-1.661 1.395-4.495 2.193"
                fill="#F4A932"></path>
            <path
                d="M71.283 49.43h.355c.178 0 .445 0 .445.267 0 .266-.178.266-.356.266h-.356v-.533h-.088zm-.445 1.69h.355v-.89h.268l.444.89h.445l-.534-.89c.267 0 .534-.178.534-.533 0-.445-.267-.623-.8-.623h-.712v2.045zm-.623-.979c0-.8.623-1.423 1.423-1.423s1.424.622 1.424 1.423c0 .8-.624 1.423-1.424 1.423-.8 0-1.423-.623-1.423-1.423zm-.356 0c0 .978.801 1.69 1.69 1.69.89 0 1.69-.712 1.69-1.69 0-.979-.8-1.69-1.69-1.69-.889 0-1.69.711-1.69 1.69z"
                fill="#E22B2E"></path>
            <path
                d="M67.092 50.602C62.036 62.066 52.221 70.14 39.432 70.24c-9.32.1-17.549-3.09-23.497-8.673l-3.57 1.495V57.48C8.5 52.196 6.22 45.418 6.22 37.842c0-19.539 14.871-34.89 35.592-34.89 3.371 0 6.444.498 8.725 1.096-3.57-1.097-7.139-1.794-11.005-1.794-22.307 0-37.277 18.143-37.277 36.884 0 20.435 15.961 37.482 36.781 37.482 19.927 0 30.735-14.155 34.204-22.629l-6.147-3.39z"
                fill="#254195"></path>
            <path
                d="M48.512 26.767c0 .687-.296 1.571-.889 2.062-.591.59-1.577 1.179-3.353 1.473-3.256.59-5.918-1.178-5.918-5.303 0-3.928 2.367-7.267 7.003-7.463 2.17-.098 3.157.59 3.057 1.768 0 1.08-.789 1.669-2.07 1.473-.494-.099-1.184-.197-1.875 0-1.48.392-2.564 1.669-2.564 4.026 0 1.768.69 2.651 1.874 2.651.887 0 1.676-.294 1.676-.883v-1.375s-.295.098-.69.196c-.69.098-1.085-.294-1.085-.884v-1.375l4.932-1.08-.098 4.714zm8.778.393V15.375s3.452-.59 4.34-.687c2.467-.295 4.144 1.08 4.144 3.044 0 1.67-1.086 2.75-1.973 3.34 0 0 1.677 1.865 2.17 2.356.591.687.591 1.866-.297 2.357-.887.59-1.775.295-2.268-.295l-2.86-3.339V25c0 .884-.493 1.473-1.382 1.67l-1.874.491zm3.256-6.776s1.973-.688 1.873-2.259c0-1.277-1.282-1.08-1.873-.884v3.143zM32.532 28.83v3.241c0 .884-.592 1.474-1.38 1.768-.593.197-1.974.687-1.974.687V22.151s2.762-.982 4.44-1.374c2.564-.59 4.34.59 4.24 2.553 0 1.964-1.085 3.142-2.071 3.928l2.17 2.062c.69.59.69 1.768 0 2.455-.394.394-1.578.885-2.564-.097l-2.86-2.849zm0-1.866s1.973-.982 1.973-2.553c0-1.375-1.282-1.08-1.973-.786v3.34zm16.769 1.866V16.85a155.54 155.54 0 0 1 7.102-1.474v1.375c0 .688-.296 1.277-.987 1.375-.986.196-2.762.59-2.762.59v1.865l3.453-.785v1.374c0 .786-.395 1.18-.986 1.277l-2.467.491v2.357l3.946-.884v1.375c0 .884-.493 1.375-1.184 1.571-2.17.59-6.115 1.473-6.115 1.473zM28.29 30.99c0 3.634-1.677 5.009-4.242 5.794-2.86.884-4.735-.491-4.735-3.24V25.49s.592-.294 1.677-.589c.888-.294 1.677 0 1.677 1.179v6.677c0 .787.394 1.278 1.184 1.18.986-.295 1.085-1.277 1.183-2.063v-8.151s.888-.295 1.579-.59c.887-.294 1.677 0 1.677 1.18v6.677zm-9.174 4.223c0 2.553-1.775 3.83-4.143 4.812l-4.833 2.062v-13.16s3.058-1.276 4.044-1.57c2.86-.983 4.537.196 4.537 2.061 0 1.278-.493 2.357-1.677 3.242.987.294 1.973 1.178 2.072 2.553zm-5.72-2.456l.59-.294c.691-.393 1.283-.982 1.283-1.866 0-.982-.789-1.179-1.874-.687v2.847zm2.169 2.849c0-.982-.789-1.571-2.17-.884v3.24s.395-.196.789-.294c.79-.393 1.38-1.08 1.38-2.062zm10.85 2.455c-1.48-.688-2.86.098-3.354.884L18.427 46.9v-6.384l-5.524 2.259v18.07l3.847-1.67s.789-.196 1.184-.982c.394-.687.394-1.767.394-1.767v-5.697l4.34 4.616c.987.982 2.664 1.473 4.242.294 1.38-1.08 1.183-3.044.394-3.928l-3.945-3.928s3.452-5.5 4.043-6.383c.79-1.178.396-2.652-.986-3.339zm8.286-3.536s-1.677.492-2.959.983c-1.776.589-2.762 1.669-2.762 4.32v15.026s1.578-.491 2.959-1.08c2.072-.786 2.762-1.767 2.762-3.928v-15.32zm1.677 17.677s2.367-.785 2.564-.883c1.875-.688 2.565-1.768 2.565-3.732v-6.285l5.524 6.285c.887.884 1.973.982 3.058.687 1.085-.294 1.972-1.277 1.972-2.651V29.91s-1.38.295-2.564.589c-1.381.393-2.367 1.276-2.367 3.536v5.4s-3.058-3.83-5.13-5.891c-1.085-1.08-2.86-.393-2.86-.393l-2.663.785-.1 18.266zm25.054-6.58c2.96-.294 4.932-1.472 6.017-2.553.987-.982 1.282-2.356 1.282-3.338v-6.187l-7.693 1.669v1.768c0 1.178.591 1.866 1.874 1.571.394-.098.986-.295.986-.295v1.474s.1.785-1.874 1.178c-2.565.393-3.65-1.178-3.749-3.928.1-2.946 1.777-4.616 3.75-5.107 2.268-.491 3.55 0 4.339.098 2.565.393 3.255-3.437.986-4.32-1.677-.689-3.945-.787-6.116-.394-2.86.59-8.384 2.947-8.384 10.606 0 6.286 4.538 8.25 8.582 7.759z"
                fill="#E22B2E"></path>
            <path
                d="M64.014 47.661c-.194-.199-.586-.199-.977-.1-10.16 2.393-27.065 7.676-36.835 11.962-.391.2-.586.3-.782.599-.195.498.293.997.293.997 1.955 2.591 10.846 5.781 20.421 3.389C60.79 60.919 63.82 50.352 64.21 48.857c0-.398.098-.897-.196-1.196m-3.321 4.186c-2.346 4.985-6.45 8.374-10.846 10.069 4.885-2.891 7.719-6.978 8.989-10.567.587-1.694 2.54-.897 1.857.498m-3.127-40.272S54.83 6.889 45.255 5.793c-5.08-.598-12.116.498-17.001 3.19-8.794 4.884-10.162 12.86-10.162 12.86-.097.199-.097.796.098 1.096.195.299.489.299.88.1 3.126-1.097 12.506-4.287 18.368-5.782 8.403-2.293 15.242-3.688 19.64-4.387.292-.1.585-.2.683-.498.196-.398-.195-.797-.195-.797M22.39 19.55c-.097.997-1.368.897-1.27-.1.196-2.393 3.81-8.174 9.185-10.667-3.322 2.193-6.84 6.38-7.915 10.767m25.697-6.48c1.173-.3 1.954-1.196 1.954-2.193 0-1.595-3.517-3.888-9.282-4.287 5.667-.498 11.823 2.093 11.823 4.287 0 1.295-1.661 1.395-4.495 2.193"
                fill="#F4A932"></path>
            <path
                d="M71.283 49.43h.355c.178 0 .445 0 .445.267 0 .266-.178.266-.356.266h-.356v-.533h-.088zm-.445 1.69h.355v-.89h.268l.444.89h.445l-.534-.89c.267 0 .534-.178.534-.533 0-.445-.267-.623-.8-.623h-.712v2.045zm-.623-.979c0-.8.623-1.423 1.423-1.423s1.424.622 1.424 1.423c0 .8-.624 1.423-1.424 1.423-.8 0-1.423-.623-1.423-1.423zm-.356 0c0 .978.801 1.69 1.69 1.69.89 0 1.69-.712 1.69-1.69 0-.979-.8-1.69-1.69-1.69-.889 0-1.69.711-1.69 1.69z"
                fill="#E22B2E"></path>
        </g>
    </svg>
@endif