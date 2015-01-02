<table class="table table-striped">

	<thead>
		<tr>
			<th><?php echo lang('client_name'); ?></th>
			<th><?php echo lang('street_address'); ?></th>
			<th><?php echo lang('city'); ?></th>
			<th><?php echo lang('zip_code'); ?></th>
			<th><?php echo lang('country'); ?></th>
			<th style="text-align: right;"><?php echo lang('balance'); ?></th>
			<!--<th><?php echo lang('active'); ?></th>-->
			<th><?php echo lang('options'); ?></th>
		</tr>
	</thead>

	<tbody>
		<?php foreach ($records as $client) { ?>
		<tr>
			<td><?php echo anchor('clients/view/' . $client->client_id, $client->client_name); ?></td>
			<td><?php echo $client->client_address_1; ?></td>
			<td><?php echo $client->client_city; ?></td>
			<td><?php echo $client->client_zip; ?></td>
			<td><?php echo $client->client_country; ?></td>
			<td style="text-align: right;"><?php echo format_currency($client->client_invoice_balance); ?></td>
			<!--<td><?php echo ($client->client_active) ? lang('yes') : lang('no'); ?></td>-->
			<td>
				<div class="options btn-group">
					<a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i> <?php echo lang('options'); ?></a>
					<ul class="dropdown-menu">
						<li>
							<a href="<?php echo site_url('clients/view/' . $client->client_id); ?>">
								<i class="icon-eye-open"></i> <?php echo lang('view'); ?>
							</a>
						</li>
						<li>
							<a href="<?php echo site_url('clients/form/' . $client->client_id); ?>">
								<i class="icon-pencil"></i> <?php echo lang('edit'); ?>
							</a>
						</li>
						<li>
							<a href="#" class="client-create-quote" data-client-name="<?php echo $client->client_name; ?>">
								<i class="icon-file"></i> <?php echo lang('create_quote'); ?>
							</a>
						</li>
						<li>
							<a href="#" class="client-create-invoice" data-client-name="<?php echo $client->client_name; ?>">
								<i class="icon-file"></i> <?php echo lang('create_invoice'); ?>
							</a>
						</li>
						<li>
							<a href="<?php echo site_url('clients/delete/' . $client->client_id); ?>" onclick="return confirm('<?php echo lang('delete_client_warning'); ?>');">
								<i class="icon-trash"></i> <?php echo lang('delete'); ?>
							</a>
						</li>
					</ul>
				</div>
			</td>
		</tr>
		<?php } ?>
	</tbody>

</table>