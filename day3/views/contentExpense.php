<div class="content">
	
	<h2>Hello, namegoeshere</h2>
	
	<a href="#"><button id="addExpense" type="submit">Add</button></a>
	
	<div id="addExpensePop">
		<h3>Add an Expense</h3>
		
		<form action="?expenseAdd" method="get">
			<div>
				<label for="date">Date:</label>
				<input type="date" id="date" name="date" />
			</div>
			
			<div>
				<label for="expenseName">Expense:</label>
				<input type="text" id="expenseName" name="expenseName" />
			</div>
			
			<div>
				<label for="expenseDesc">Description:</label>
				<input type="text" id="expenseDesc" name="expenseDesc" />
			</div>
			
			<div>
				<label for="type">Type of expense:</label>
				<select id="type">
					<option>Housing</option>
					<option>Insurance</option>
					<option>Bills</option>
					<option>Food</option>
					<option>Misc</option>
				</select>
			</div>
			
			<div>
				<label for="amount">Amount:</label>
				<input type="text" id="amount" name="amount" />
			</div>
			
			<a href="#"><button id="addTo" type="submit">Add</button></a>
			
		</form>
	</div><!-- addExpensePop -->
	
	<div id="expenseDisplay">
		
		<!-- this needs to show in ascending order -->
		
		
		
	</div><!-- expenseDisplay -->
	
	
</div><!-- content -->