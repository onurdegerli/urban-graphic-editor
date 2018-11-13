## Requirements

* Computer :) (Linux based is recommended.)
* Terminal (If you use MacOS, iTerm is recommended.)
* Git client
* Docker (version > 18.01)

## How to install the project?

1 - Clone the project from BitBucket.

```git clone https://onurdegerli@bitbucket.org/onurdegerli/urban-graphic-editor.git```

2 - Change directory to your project home.

```cd ~/urban-graphic-editor```

3 - In your project folder, run the command below:

```bash start.sh```

4 - Open the php container and run the CLI.

```docker exec -it graphiceditor_app /bin/bash```

```php index.php```

## How to stop the project?

```bash stop.sh```

## How to open the project in browser?

Web: `http://127.0.0.1/`

## Troubleshooting

- If you encounter with any dependency problem, please run the command below in `graphiceditor_app` container.

```rm -rf vendor```

```composer update```

- If you still encounter with any problem, feel free to contact with me.

```onurdegerli@gmail.com```