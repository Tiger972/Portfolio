from js import document

def cell_click(position):
    game.play_turn(position)

def update_cells(values):
    for i, value in enumerate(values):
        for player in ["x", "o", "none"]:
            element = document.getElementById(f"pos-{i}-{player}")
            if element is not None:
                if player == "none" and value is None:
                    element.classList.remove("hidden")
                elif player == "x" and value == 0:
                    element.classList.remove("hidden")
                elif player == "o" and value == 1:
                    element.classList.remove("hidden")
                else:
                    element.classList.add("hidden")
            else:
                print(f"Element 'pos-{i}-{player}' not found")


def display_message(value):
    message_element = document.getElementById("message")
    if message_element is not None:
        message_element.innerHTML = value
    else:
        print("Element 'message' not found")


class TicTacToe:

    def start(self):
        self.player = 0
        self.cells = [None] * 9
        self.game_running = True
        display_message("Player 1's turn")
        update_cells(self.cells)

    def play_turn(self, position):
        if not self.game_running:
            return
        if self.cells[position] is not None:
            display_message("Cell already taken")
            return
        self.cells[position] = self.player
        update_cells(self.cells)
        if not self.is_game_over():
            self.next_player()

    def next_player(self):
        player_message = "Player {}'s turn"
        self.player = (self.player + 1) % 2
        display_message(player_message[self.player])

    def is_game_over(self):
        if self.is_winner():
            win_message = "Player {} wins!"
            display_message(win_message.format(self.player + 1))
            self.game_running = False
            return True
        if self.is_draw():
            display_message("Draw!")
            self.game_running = False
            return True
        return False

    def is_winner(self):
        win_patterns = [
            [0, 1, 2],
            [3, 4, 5],
            [6, 7, 8],
            [0, 3, 6],
            [1, 4, 7],
            [2, 5, 8],
            [0, 4, 8],
            [2, 4, 6]
        ]
        for first, second, third in win_patterns:
            if self.cells[first] == self.cells[second] == self.cells[third] == self.player:
                return True
        return False

    def is_draw(self):
        return all(self.cells)

game = TicTacToe()
game.start()
