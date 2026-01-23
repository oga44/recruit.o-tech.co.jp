# recruit.o-tech.co.jp

本件は、WordpressとViteを使用しテーマ開発をするものになります。
Wordpressは、- [local](https://localwp.com/)を使用して構築しています。

## Wordpressの構築

localを起動して、サイトを作成する前に設定を確認します。

localの preferences -> advanced -> router mode -> 'localhost' を選択してください。

作成については詳細を省きますが、サーバーに合わせて作成する。

作成後、ローカルサイトの "OVER VIEW -> Site Host" が _localhost:xxxx_ となっていることを確認してください。
port番号は、あと使用しているのでメモしておいてください。

WP Adminのボタンを押してログイン確認。

問題なければ、Viteとの連携に移ります。

## Viteとの連携

srcフォルダのシンボリックリンクを作成してください。
ターミナルで下記を入力。

    ln -s src theme-name

theme-nameは適宜変更してください。
localで作成されたapp内のテーマフォルダに移動させてください。

.envにて、`VITE_LOCAL_PORT` の値をlocalに記載されていた番号に変更。
一緒にテーマまでのpathを設定しておきます。

`VITE_WP_DIRECTORY` Wordpressアドレスを変更している場合はディレクトリ名を入力。
`VITE_THEME_NAME` テーマ名を入力

vite.config.jsを開いて変更します。

Wordpressにログインして、テーマを移動させたものに変更すれば完成です。

## コマンド

### Develop Mode

```
npm run dev
```

### Production Upload

```
npm run build
```

### Lint

```
npm  run  lint:check
npm  run  lint:fix
```

Lint はプリコミット時に必ず実行されます。以下の vscode プラグインをインストールすると vscode 保存時にも Lint が実行されます。

- [prettier](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode)
- [markuplint](https://marketplace.visualstudio.com/items?itemName=yusukehirao.vscode-markuplint)
- [stylelint](https://marketplace.visualstudio.com/items?itemName=stylelint.vscode-stylelint)
- [eslint](https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint)
